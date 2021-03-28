<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kanji extends Model
{
    protected $table = "kanji";
    protected $fillable=['chapper','kanji','hantu','ynghia','cachghinho','onyomi','kunyomi'];



    public function addmoreinfkanji(){
    	return $this->hasMany('App\addmoreinfkanji','kanji_id');
    	
    }
}
