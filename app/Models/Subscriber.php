<?php

namespace App\Models;

use App\Models\Website;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscriber extends Model
{
    // use HasFactory;
    protected $fillable = ['name', 'email'];

    // public $table = 'subscribers';

    public function websites() {
        return $this->belongsToMany(Website::class);
    }
}
