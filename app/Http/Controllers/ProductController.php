<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function list(){
        $product = Product::with("category")->paginate(10);
        return view("product.product_list",[
            "product"=>$product
        ]);
    }
    public function add(){
        $category = Category::all();
        return view("product.product_add",[
            "category"=>$category
        ]);
    }

    public function productSave(Request $request){
        $request->validate([
            "name"=>"required",
            "description"=>"required",
            "price"=>"required|min:0",
            "qty"=>"required|min:0",
            "sale"=>"required",
            "new_product"=>"required",
            "category_id"=>"required|numeric|min:1"
        ],[
            "name.required"=>"Vui lòng nhập tên sản phẩm.!",
            "description.required"=>"Vui lòng nhập giá sản phẩm.!",
            "price.required"=>"Vui lòng nhập thông tin sản phẩm.!",
            "qty.required"=>"Vui lòng nhập số lượng sản phẩm.!",
            "sale.required"=>"Sản phẩm có đang sale không!",
            "new_product.required"=>"Sản phẩm có mới không!",
            "category_id.required"=>"Vui lòng nhập tên loại sản phẩm.!",
        ]);

        $image = null;
        if ($request->has("image")){
            $file = $request->file("image");
            $exName = $file->getClientOriginalExtension();
            $fileName = time().".".$exName;
            $fileSize = $file->getSize();
            $allow = ["png","jpeg","jpg","gif"];

            if (in_array($exName,$allow)){
                if ($fileSize < 10000000){
                    try {
                        $file->move("upload",$fileName);
                        $image = $fileName;
                    }catch (\Exception $e){}
                }
            }
        }
        try{
            Product::create([
                "name"=>$request->get("name"),
                "image"=>$image,
                "description"=>$request->get("description"),
                "price"=>$request->get("price"),
                "qty"=>$request->get("qty"),
                "sale"=>$request->get("sale"),
                "new"=>$request->get("new_product"),
                "category_id"=>$request->get("category_id")
            ]);
        }catch (\Exception $e){
            abort("404");
        }
        return redirect()->to("admin/products");
    }

    public function edit($id){
        $category = Category::all();
        $item = Product::findOrFail($id);
        return view("product.product_edit",[
            "item"=>$item,
            "category"=>$category
        ]);
    }

    public function update(Request $request,$id){
        $request->validate([
            "name"=>"required",
            "description"=>"required",
            "price"=>"required|min:0",
            "qty"=>"required|min:0",
            "sale"=>"required",
            "new"=>"required",
            "category_id"=>"required|numeric|min:1"
        ]);
        $image = request("image");
        if ($image){
            $image = null;
            if ($request->has("image")){
                $file = $request->file("image");
                $exName = $file->getClientOriginalExtension();
                $fileName = time().".".$exName;
                $fileSize = $file->getSize();
                $allow = ["png","jpeg","jpg","gif"];
                if (in_array($exName,$allow)){
                    if ($fileSize < 10000000){
                        try {
                            $file->move("upload",$fileName);
                            $image = $fileName;
                        }catch (\Exception $e){}
                    }
                }
            }
            $product = Product::findOrFail($id);
            $product->update([
                "name"=>$request->get("name"),
                "image"=>$image,
                "description"=>$request->get("description"),
                "price"=>$request->get("price"),
                "qty"=>$request->get("qty"),
                "sale"=>$request->get("sale"),
                "category_id"=>$request->get("category_id")
            ]);
        }else{
            $product = Product::findOrFail($id);
            $product->update([
                "name"=>$request->get("name"),
                "description"=>$request->get("description"),
                "price"=>$request->get("price"),
                "qty"=>$request->get("qty"),
                "sale"=>$request->get("sale"),
                "new"=>$request->get("new"),
                "category_id"=>$request->get("category_id")
            ]);
        }
        return redirect()->to("admin/products");
    }

    public function destroy($id){
        Product::findOrFail($id)->delete();
        return redirect()->to("admin/products");
    }

}
