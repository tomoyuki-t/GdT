<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'area_id', 'user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function applicants() {
        return $this->hasMany('App\Models\Applicant');
    }
}
