<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;





class Product extends Model
{

use HasFactory;
public $timestamps=false;
protected $fillable = ["categories_id","name","price","discount","weight","description","available","stock"];

    public function categories(){
        return $this->belongsTo(Categorie::class);
    }
}

