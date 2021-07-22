<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function listComment(){
        $product = Product::with("category")->paginate(10);
        $comment = Comment::with("user")->get();
        return view("comment.comment",[
            "product"=>$product,
            "comment"=>$comment
        ]);
    }
    public function deleteComment($id){
        Comment::destroy($id);
        return redirect("admin/comments");
    }
}
