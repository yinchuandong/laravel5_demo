<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

      protected $fillable = ['title', 'slug', 'body', 'user_id'];

  public function hasManyComments()
  {
    return $this->hasMany('App\Comment', 'page_id', 'id');
  }

}
