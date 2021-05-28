<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WineModel extends Model
{
    use HasFactory;

    public $table = 'wines_models';

    public $primaryKey = 'id';

    
    public function wine()
    {
        return $this->belongsTo(Wine::class);
    }
}
