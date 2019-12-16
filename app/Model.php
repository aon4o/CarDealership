<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    protected $fillable = ['name'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
