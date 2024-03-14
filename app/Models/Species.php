<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'nome',
    'user_id',
    'ativo',
  ];

  /**
   * Get the user that owns the species.
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
