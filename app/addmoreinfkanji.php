<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addmoreinfkanji extends Model
{
    protected $table = "addmoreinfkanji";
    protected $fillable=['kanji_id','hantu','hiragana','hannghia','onyomi','vidu','nhatnghia'];




    public function kanji(){

    	return $this->belongsTo('App\kanji','kanji_id');
    }
}
