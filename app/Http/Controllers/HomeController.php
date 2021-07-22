<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Exception;


class HomeController extends Controller
{
    public function show(){
        $products = Product::with("category")->paginate(6);
        $products1 = Product::with("category")->where("sale",'<>','0')->paginate(9);
        return view("frontend/home",[
            "products"=>$products,
            "products1"=>$products1
        ]);
    }

    public function addToCart($id){
        $product = Product::findOrFail($id);
        $cart = [];
        if (Session::has("cart")) {
            $cart = Session::get("cart");
        }
        if (!$this->checkCart($cart, $product)) {
            $product->cart_qty = 1;
            $cart[] = $product;

        } else {
            for($i=0;$i<count($cart);$i++){
                if($cart[$i]->id == $product->id){
                    $cart[$i]->cart_qty = $cart[$i]->cart_qty+1;
                }
            }
        }
        Session::put("cart", $cart);
        return redirect("/");
    }

    private function checkCart($cart,$p){
        foreach ($cart as $item){
            if ($item->id == $p->id){
                return true;
            }
        }
        return false;
    }

    public function shoppingCart(){
        $cart = [];
        if (Session::has("cart")){
            $cart = Session::get("cart");
        }
        return view("frontend/shopping-cart",[
            "cart"=>$cart
        ]);
    }

    public function updateCart($id,Request $request){
        if(Session::has("cart")){
            $cart = Session::get("cart");
            for($i=0;$i<count($cart);$i++){
                if($cart[$i]->id && $cart[$i]->id == $id){
                    $cart[$i]->cart_qty = $request->get("cart_qty");
                    if($cart[$i]->cart_qty == 0){
                        unset($cart[$i]);
                    }
                    break;
                }
            }
            Session::put("cart",$cart);
        }
        return redirect("shopping-cart");
    }

    public function deleteCart($id){
        if(Session::has("cart")){
            $cart = Session::get("cart");
            for($i=0;$i<count($cart);$i++){

                if($cart[$i]->id == $id){
                    unset($cart[$i]);
                    break;
                }
            }
            $cart = array_values($cart);
            Session::put("cart",$cart);
        }
        return redirect()->back();
    }

    public function clearCart(){
        Session::forget("cart");
        return redirect()->back();
    }

    public function checkout(){
        $cart = [];
        if (Session::has("cart")){
            $cart = Session::get("cart");
        }
        if(count($cart)){
            return view("frontend/checkout",["cart"=>$cart]);
        }
        return redirect()->to("/");
    }

    public function placeOrder(Request  $request){
        $request->validate([
            "customer_name"=>"required",
            "customer_tel"=>"required",
            "customer_address"=>"required",
        ]);
        try {
            $cart = Session::get("cart");
            if(count($cart) == 0) return redirect()->to("/");
            $grandTotal = 0;
            foreach ($cart as $item){
                $grandTotal += $item->price * $item->cart_qty;
            }
            $order = Order::create([
                "customer_name"=>$request->get("customer_name"),
                "customer_tel"=>$request->get("customer_tel"),
                "customer_address"=>$request->get("customer_address"),
                "grand_total"=>$grandTotal,
            ]);
            // tao order item
            foreach ($cart as $item){
                DB::table("orders_detail")->insert([
                    "order_id"=>$order->id,
                    "product_id"=>$item->id,
                    "price"=>$item->price,
                    "qty"=>$item->cart_qty,
                ]);
                $p = Product::find($item->id);
                $p->qty -= $item->cart_qty;
                $p->save();
            }
            Session::forget("cart");
            return redirect("/");
        }catch (Exception $e){
            die("error");
        }

    }

    // Product

    public function newProduct(){
        $products = Product::with("category")->where("new",1)->paginate(9);
        return view("frontend/new",[
            "products"=>$products
        ]);
    }

    public function searchItem(Request $request){
        $search = $request->input('search');
        $products = Product::with("category")->where("name",'LIKE',"%{$search}%")
                                            ->orWhere("description",'LIKE',"%{$search}%")
                                            ->orWhere("price","$search")->paginate(9);
        return view("frontend/search",[
            "products"=>$products
        ]);
    }


    public function getProductType($type){
        $product_type = Product::with("category")->where('category_id',$type)->get();
        $cate = DB::table("categories")->where("id",$type)->get();

        return view("frontend/cate-product",[
            "product_type"=>$product_type,
            "cate"=>$cate
        ]);
    }

    public function saleProduct(){
        $products = Product::with("category")->where("sale",'<>','0')->paginate(9);

        return view("frontend/sale",[
            "products"=>$products
        ]);
    }

    public function contacts(){
        return view("frontend/contacts");
    }

    public function about(){
        return view("frontend/about");
    }

    public function createComment(Request $request,$id){
        $request->validate([
            "content"=>"required",
        ]);
        try {
            $user = Auth::id();
            Comment::create([
                "id_user"=> $user,
                "id_product"=> $id,
                "content"=>$request->get("content")
            ]);
        }catch (Exception $e){
            abort("Error");
        }
        return redirect()->back();
    }

    public function productDetail($id){
        $auth = Auth::id();
        $p = Product::with("category")->where("id",$id)->get();
        $p1 = Product::with("category")->where("sale",'<>','0')->limit(3)->get();
        $comments = Comment::with("user")->where("id_product",$id)->get();
//        dd($comments);
        return view("frontend/product_detail",[
            "p"=>$p,
            "p1"=>$p1,
            "comments"=>$comments
        ]);
    }
}
