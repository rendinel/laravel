<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public $table = 'cars';

    public $primaryKey = 'id';

    protected $fillable = ['name', 'founded', 'description','image_path'];

    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    public function headquarter()
    {
        return $this->hasOne(Headquarter::class);
    }
}
