<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $fillable = ['price','name','nameOrj','category_id','lang','description','time','year','country','image','image_banner'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
