<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventImage extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function event(){
        return $this->belongsTo(Event::class);
    }
    public function users() {
        return $this->belongsToMany(User::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function getColorAttribute(){
        $datos = $this->users->where('id',auth()->user()->id)->first();
        if($datos){
            return "#448aff";
        }
        return "#666666";
    }
}
