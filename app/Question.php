<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user(){
    	protected $fillable = ['title','body'];
    	return $this->belongsTo(User::class);
    }
}
