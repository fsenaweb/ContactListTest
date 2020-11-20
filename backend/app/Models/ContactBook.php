<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactBook extends Model
{
    protected $fillable = [
        'name',
        'surname'
    ];

    public function contacts()
    {
        return $this->hasMany('\App\Models\Contact');
    }
}
