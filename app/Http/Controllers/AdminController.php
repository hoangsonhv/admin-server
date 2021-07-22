<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function getLogin(){
        if (Auth::guard('admin')->check()) {
            return redirect("admin/home");
//            return redirect("/admin/home");
        }else{
            return view("admin/login");
        }

    }

    public function postLogin(Request $request){
        $credentials = $request->only("email","password");
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route("admin.home");
        }else{
            return redirect("admin/login");
        }
    }

    public function homeAdmin(){
        if (Auth::guard("admin")->check()){
            $product = Product::with("category")->paginate(5);
            $category = Category::with("product")->paginate(5);
            return view("admin/home",[
                "product"=>$product,
                "category"=>$category
            ]);
        }else{
            return redirect("admin/login");
        }
    }

    public function logout(){
        Auth::guard("admin")->logout();
        return redirect("admin/login");
    }



}
