<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Team;
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

    public function getTeam(){
        $teams = Team::all();
        return view("team/team",[
            "teams"=>$teams
        ]);
    }

    public function getSaveTeam(){
        return view("team/add");
    }

    public function saveTeam(Request $request){
        $request->validate([
            "name"=>"required",
            "position"=>"required",
            "phone"=>"required|min:0|max:12"
        ],[
            "name.required"=>"Vui lòng nhập tên.!",
            "position.required"=>"Vui lòng nhập chức vụ.!",
            "phone.required"=>"Vui lòng nhập số điện thoại.!",
            "phone.max"=>"Số điện thoại không được quá 12 số"
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
            Team::create([
                "name"=>$request->get("name"),
                "image"=>$image,
                "position"=>$request->get("position"),
                "phone"=>$request->get("phone")
            ]);
        }catch (\Exception $e){
            abort("404");
        }
        return redirect()->to("admin/teams");
    }
}
