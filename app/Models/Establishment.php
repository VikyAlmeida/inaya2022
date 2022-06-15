<?php

namespace App\Models;

use App\Models\Bill;
use App\Models\Customer;
use App\Models\Publication;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Establishment extends Model
{
    use HasFactory;
    public function getRouteKeyName(){
        return "slug";
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function category(){
        return $this->hasMany(Category::class);
    }
    public function bills(){
        return $this->hasMany(Bill::class);
    }
    public function ratings(){
        return $this->hasMany(Rating::class);
    }
    public function publications(){
        return $this->hasMany(Publication::class);
    }
    public function getRantinsTotalAttribute(){
        $rantins = DB::table('ratings')
                    ->select(DB::raw('(SUM(stars_food)+SUM(stars_service)+SUM(stars_relation_price_quality)+SUM(stars_atmosphere))/(COUNT(*)*4) as stars_total'))
                    ->where('establishment_id', $this->id)
                    ->first();
        return intval($rantins->stars_total);
    }
    public function getRantinsComidaAttribute(){
        $rantins = DB::table('ratings')
                    ->select(DB::raw('SUM(stars_food)/COUNT(stars_food) as stars_food'))
                    ->where('establishment_id', $this->id)
                    ->first();
        return intval($rantins->stars_food);
    }
    public function getRantinsServiceAttribute(){
        $rantins = DB::table('ratings')
                    ->select(DB::raw('SUM(stars_service)/COUNT(stars_service) as stars_service'))
                    ->where('establishment_id', $this->id)
                    ->first();
        return intval($rantins->stars_service);
    }
    public function getRantinsPriceAttribute(){
        $rantins = DB::table('ratings')
                    ->select(DB::raw('SUM(stars_relation_price_quality)/COUNT(stars_relation_price_quality) as stars_relation_price_quality'))
                    ->where('establishment_id', $this->id)
                    ->first();
        return intval($rantins->stars_relation_price_quality);
    }
    public function getRantinsAtmosphereAttribute(){
        $rantins = DB::table('ratings')
                    ->select(DB::raw('SUM(stars_atmosphere)/COUNT(stars_atmosphere) as stars_atmosphere'))
                    ->where('establishment_id', $this->id)
                    ->first();
        return intval($rantins->stars_atmosphere);
    }
}
