<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;
use App\Model;

class Brand extends BaseModel
{
    protected $fillable = ['name'];

    public function models()
    {
        return $this->hasMany(Model::class);
    }
}
