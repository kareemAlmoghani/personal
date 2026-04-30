<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Educatione extends Model
{
    //
   
      protected $guarded=[];

    public function casts(){
        return[
            'location'=>'array',
            'college'=>'array',
           'field'=>'array',
           'degree'=>'array',
            'content'=>'array',


        ];
    }

    public function getCollegeTransAttribute(){
        return $this->college[app()->getLocale()];
    }
    public function getDegreeTransAttribute(){
        return $this->degree[app()->getLocale()];
    }
    public function getFieldTransAttribute(){
        return $this->field[app()->getLocale()];
    }
    public function getContentTransAttribute(){
        return $this->content[app()->getLocale()];
    }
    public function getLocationTransAttribute(){
        return $this->location[app()->getLocale()];
    }
}
