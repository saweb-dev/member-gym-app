<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Multitenancy\Models\Concerns\UsesTenantConnection;

class Member extends Authenticatable
{
    use HasFactory, UsesTenantConnection;

    protected $table = 'members';

    protected $guarded = [];

    protected $hidden = ['password', 'remember_token'];
}