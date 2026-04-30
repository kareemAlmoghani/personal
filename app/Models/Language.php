<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    protected $guarded=[];
     public function casts(){
        return [
            'title'=>'array'
        ];
    }
    public function getTitleTransAttribute(){
        return $this->title[app()->getLocale()];
    }

}
