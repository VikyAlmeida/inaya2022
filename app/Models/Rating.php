<?php

namespace App\Models;

use App\Models\Establishment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rating extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function establishment(){
        return $this->belongsTo(Establishment::class);
    }
}
