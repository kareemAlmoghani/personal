<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $guarded=[];
    public function casts(){
        return[
        'name'=>'array',
        'content'=>'array',
        ];
    }
    public function getNameTransAttribute(){
        return $this->name[app()->getLocale()];
    }
     public function getContentTransAttribute(){
        return $this->content[app()->getLocale()];
    }

}
