<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name'];

    public function models()
    {
        return $this->hasMany(Model::class);
    }
}
