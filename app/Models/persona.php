<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
   protected $table= 'persona';
   public $timestamps =false;
    public $fillable = ['nombre', 'apellido', 'cedula' ];
}
