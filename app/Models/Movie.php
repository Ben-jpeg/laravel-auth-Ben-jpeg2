<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Ne touche pas à ces champs en BDD
    // protected $guarded = ['name'];

    // Disdable mass assignemnt protection
    // Attention, il faut être sur de ce qu'on fait
    protected $guarded = [];

    // Green flag pour enregistrer ces champs en BDD
    protected $fillable = ['name'];

    /**
     * return string path to resource
     *
     * @return string
     */
    public function path(): string
    {
        return '/movies' . '/' . $this->id;
    }
}
