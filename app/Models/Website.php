<?php

namespace App\Models;

use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Website extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url'];

    // public $table = 'websites';

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function subscribers() {
        return $this->belongsToMany(Subscriber::class, 'website_subscriber');
    }
}
