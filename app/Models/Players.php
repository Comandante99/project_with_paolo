<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

   protected $fillable = [
      'nickname',
      'score',
      'win',
      'lose',
      'rr',
      'teams_id'
   ];
}
