<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    public $table = 'wines';

    public $primaryKey = 'id';

    protected $fillable = ['name', 'founded', 'description'];

    public function wineModels()
    {
        return $this->hasMany(WineModel::class);
    }
}
