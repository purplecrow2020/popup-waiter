<?php

namespace App\Providers;

class Html extends Model 
{
    protected $table = 'poptin_htmls';
    protected $fillable = ['popup_code','popup_html'];
}