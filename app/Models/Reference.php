<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Reference extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'CompanyName',
        'CompanyLogo',
        'created_at',
        'updated_at',
    ];
}
