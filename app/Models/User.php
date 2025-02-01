<?php

namespace App\Models;

use App\Models\Scopes\UserScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// using process of global scope_ii_two 
#[ScopedBy(UserScope::class)]

class User extends Model
{
    use HasFactory;
    // global scope method i
    // protected static function booted(): void{
    //     static::addGlobalScope('userdetails',function(Builder $builder){
    //         $builder->where('status',1);
    //     });
    // }


    // global scope method ii using process one
      protected static function booted(): void{
        static::addGlobalScope(new UserScope);

    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
    // local scope
    // public function scopeActive($query){
    //     return $query->where('status',1);
    // }
    // public function scopeCity($query,$cityName){
    //     return $query->where('city',$cityName);
    // }

    public function scopeCity($query,$cityName){
        return $query->whereIn('city',$cityName);
    }
    public function scopeSort($query){
        return $query->orderBy('name','asc');
    }
}
