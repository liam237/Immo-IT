<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'house_name',
        'email',
        'first_name',
        'last_name',
        'subject',
        'message',
        // Ne pas inclure '_token' ici
    ];
}
