<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * Si jamais on veut faire un Model Parent Custom pour tous les modèles
 */

class Model extends BaseModel
{
    use HasFactory;

    /**
    * return string path to resource
    *
    * @return string
    */
    public function path(): string
    {
        // TODO : rendre la string dynamique avec get_class
        return '/movies' . '/' . $this->id;
    }
}
