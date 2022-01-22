<?php

namespace App\Models;

use App\models\Traits\Relations\UserRelations;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use UserRelations;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "register";
  
}
