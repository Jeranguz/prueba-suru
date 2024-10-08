<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyTransactionType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
