<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    //
    protected $guarded=[];

    public function casts(){
        return[
            'location'=>'array',
            'title'=>'array',
            'company'=>'array',
            'content'=>'array',
        ];
    }
    public function getTitleTransAttribute(){
        return $this->title[app()->getLocale()];
    }
    public function getCompanyTransAttribute(){
        return $this->company[app()->getLocale()];
    }
    public function getLocationTransAttribute(){
        return $this->location[app()->getLocale()];
    }
    public function getContentTransAttribute(){
        return $this->content[app()->getLocale()];
    }
}
