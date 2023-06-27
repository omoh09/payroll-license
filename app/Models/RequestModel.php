<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestModel extends Model
{
    use HasFactory;

    Protected $fillable = [
        'operator_name','operator_email','operator_phone','request_license',
        'app_username','app_employee_number','status'
    ];
}
