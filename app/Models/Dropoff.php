<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dropoff extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function charge() {
        return $this->hasMany(Charge::class);
    }
}
