<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\{Model,SoftDeletes};
use Str;

class Category extends Model
{
    use SoftDeletes;

    protected $table ="categories";
    protected $connection ="pgsql";

    protected $fillable=['name','description'];
    //

    public static function boot(){

        static::creating(function ($model){
            $model->slug=Str::slug($model->name);
            $model->created_user=1;
            $model->update_user=1;

        });
        static::updating(function ($model){
            $model->update_user=1;

        });
        parent::boot();

        

    }
    public function getNameAttribute($value){
        // return $value.'proceso';
     return Str::upper($value);

     }
   
     public function setNameAttribute($value){
        $this->attributes['name']=Str::upper($value);

     }

}
