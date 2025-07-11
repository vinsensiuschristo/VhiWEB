<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendor extends Model
{
    protected $table = 'vendors';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'website',
    ];

    public function product():HasMany
    {
        return $this->hasMany(Product::class);
    }
}
