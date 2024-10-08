<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'image_name',
    ];

    protected $hidden = ['created_at', 'updated_at'];
    
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
