<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Article extends Model
{
    protected $collection = 'articles'; // Nombre de la colección en MongoDB
    protected $fillable = ['title', 'date', 'image', 'description', 'url']; // Campos permitidos
}
