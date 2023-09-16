<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table ="employees";
    protected $primarykey ="id";
    protected $fillable =[
            'employee_name',
            'employee_dob',
            'employee_phone'
    ];
    use HasFactory;
}
