<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateNews extends Model
{
    protected $table = 'cate_news';

    protected $fillable = ['name','alias','description','parent_id'];

    //public $timestamps = false;

    public function news () {
    	return $this->hasMany('App\News');
    }
}
