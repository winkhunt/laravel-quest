<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable =['title','body'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function setTitleAttribute($value)
    {
        return $attributes['title']=$value;
        return $attributes['slug']=\str_slug($value);
    }
}