<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
   protected $fillable = [
    'order',
    'status',
    'name',
    'position',
    'description',
    'image',
    'location',
   ];
}
