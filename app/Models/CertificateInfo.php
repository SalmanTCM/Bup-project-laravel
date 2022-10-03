<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fname', 
        'mname', 
        'board',
        'group',  
        'dob', 
        'roll',
        'registrationNo',
        'gpaaditional',
        'gpa'        
    ];
}
