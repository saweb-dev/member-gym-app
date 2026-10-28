<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Multitenancy\Models\Tenant as BaseTenant;
class Tenant extends BaseTenant
{
    // use HasFactory;
    protected $table = 'tenants';
    protected $fillable = ['name', 'domain', 'database', 'access_code'];
    public static function findByAccessCode(?string $code) : ?self
    {
        if (empty($code)) {
            return null;
        }
        return static::where('access_code', trim($code))->first();
    }
}
