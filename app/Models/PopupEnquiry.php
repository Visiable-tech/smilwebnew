<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PopupEnquiry extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'class', 'page_url'];
}