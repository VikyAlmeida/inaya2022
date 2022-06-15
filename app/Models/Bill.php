<?php

namespace App\Models;

use App\Models\Establishment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bill extends Model
{
    use HasFactory;
    public function establishments() {
        return $this->belongsTo(Establishment::class);
    }
}
