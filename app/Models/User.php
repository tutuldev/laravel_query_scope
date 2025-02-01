<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected static function booted(): void{
        static::addGlobalScope('userdetails',function(Builder $builder){
            $builder->where('status',1);
        });
    }

    // protected static::addGlobalScope('userdetails',function(Builder $builder){
    //     $builder->where('status',1);
    // });
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
