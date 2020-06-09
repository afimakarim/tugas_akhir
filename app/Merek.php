<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    protected $table='mereks';
    protected $fillable = ['name', 'gambar'];
//    public function ()
//    {
//        return $this->belongsTo(Category::class);
//    }
}
