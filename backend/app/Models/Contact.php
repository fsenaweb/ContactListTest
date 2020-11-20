<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'contact',
        'contact_book_id'
    ];

    public function contactbook()
    {
        return $this->belongsTo('\App\Models\ContactBook');
    }

}
