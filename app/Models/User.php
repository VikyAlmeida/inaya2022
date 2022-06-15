<?php

namespace App\Models;

use App\Models\Event;
use App\Models\Rating;
use App\Models\Comment;
use App\Models\EventImage;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'user',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function events(){
        return $this->hasMany(Event::class);
    }
    public function events_1(){
        return $this->belongsToMany(Event::class);
    }
    public function EventImage(){
        return $this->belongsToMany(EventImage::class);
    }
    public function EventImage_1(){
        return $this->hasMany(EventImage::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function ratings(){
        return $this->hasMany(Rating::class);
    }
    public function customer(){
        return $this->hasOne(Customer::class);
    }
    public function getEstadoSpanAttribute(){
        $span = "";
        switch ($this->customer->status){
            case "accepted":
                $span = '<span class="badge bg-label-success me-1">ACEPTADO</span>';
            break;
            case "canceled":
                $span = '<span class="badge bg-label-primary me-1">CANCELADO</span>';
            break;
            case "banned":
                $span = '<span class="badge bg-label-info me-1">BANEADO</span>';
            break;
        }
        return $span;
    }
    public function getfotoAttribute(){
        $image = ($this->image == "user-default.png")? "../../images/users/".$this->image: "../../images/users/".$this->id."/".$this->image;
        return $image;
    }
}
