<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Administrator extends Authenticatable
{
  use HasApiTokens;

  protected $fillable = [
    'username',
    'password',
    'last_login_at',
  ];

  protected $hidden = [
    'password',
  ];
}
