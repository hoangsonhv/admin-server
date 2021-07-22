<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = "products";
    protected $fillable = ["image","name","description","price","qty","sale","new","category_id"];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Comment(){
        return $this->hasMany(Comment::class,'id_product','id');
    }

    public function getImage(){
        if ($this->image){
            return asset("upload/".$this->image);
        }
        return asset("upload/default.png");
    }
}
