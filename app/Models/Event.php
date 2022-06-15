<?php

namespace App\Models;

use App\Models\User;
use App\Models\EventImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    
    protected $dates = ['initDate_at','finishDate_at'];
    public function getRouteKeyName(){
        return "slug";
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function users() {
        return $this->belongsToMany(User::class);
    }
    public function EventImages(){
        return $this->hasMany(EventImage::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function getinitDateFormatAttribute(){
        return $this->initDate_at->translatedFormat("d m Y");
    }
    public function getfinishDateFormatAttribute(){
        return $this->initDate_at->translatedFormat("d m Y");
    }
    public function getColorAttribute(){
        $datos = $this->users->where('id',auth()->user()->id)->first();
        if($datos){
            return "#448aff";
        }
        return "#666666";
    }
}
