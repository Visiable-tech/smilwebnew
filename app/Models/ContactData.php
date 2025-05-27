<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactData extends Model
{
    protected $table = 'contact_data';

    protected $fillable = ['name', 'phone', 'email', 'message'];
}
