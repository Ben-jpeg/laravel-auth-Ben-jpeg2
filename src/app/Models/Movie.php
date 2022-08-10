<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // On active le mass assignment
    // protected $fillable = ['name', 'description', 'duration', 'release', 'director_id'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function director()
    {
        // Movie::find(2)->director
        return $this->belongsTo(Director::class);
    }

    public function actors()
    {
        // Movie::find(2)->actors
        return $this->belongsToMany(Actor::class);
    }
}
