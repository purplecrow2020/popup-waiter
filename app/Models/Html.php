<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Html extends Model
{
    use HasFactory;
    protected $table = 'poptin_htmls';
    protected $fillable = ['popup_code','popup_html'];
}
