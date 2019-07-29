<?php

namespace App\Models;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;


class Message extends Model
{
    protected $fillable=['name','email','message'];

   public function scopeTwoMonthsOld(Builder $query){

    $query->where(' created_at','<=',Carbon::parse("1 hours ago"));
}


}

