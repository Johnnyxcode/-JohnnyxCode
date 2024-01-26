<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table = 'index_form';
    protected $fillable = ['name','email', 'subject',  'message' ];
}