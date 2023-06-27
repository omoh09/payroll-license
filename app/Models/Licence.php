<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    use HasFactory;

    Protected $fillable = [
        'admin_email','app_id','number_of_licence','status'
    ];
}
