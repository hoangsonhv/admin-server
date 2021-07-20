<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserContrller extends Controller
{
    public function listUser(){
        $users = User::all();
        return view("user/user_list",[
            "users"=>$users
        ]);
    }

    public function editUser($id){
        $user = User::findOrFail($id);
        return view("user.user_edit",[
            "user"=>$user
        ]);
    }

    public function updateUser(Request $request,$id){
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "password"=>"required"
        ]);
        $users = User::findOrFail($id);
        $users->update([
            "name" => $request->get("name"),
            "email" => $request->get("email"),
            "password" => $request->get("password")
        ]);
//        dd($users);
        return redirect()->to("admin/user");
    }

    public function deleteUser($id){
        User::findOrFail($id)->delete();
        return redirect()->to("admin/user");
    }

    public function dashboard(){
        return view("user/user_list");
    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }
}
