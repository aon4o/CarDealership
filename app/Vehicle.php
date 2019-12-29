<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Vehicle extends BaseModel
{
    protected $fillable = ['model_id', 'engine_volume', 'horse_power', 'color', 'year_made', 'reg_num'];

    public function model()
    {
        return $this->belongsTo(Model::class);
    }
}
