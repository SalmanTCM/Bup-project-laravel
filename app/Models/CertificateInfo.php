<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'refarence_id',
        'fname', 
        'mname',
        'dob',
        'ssc_exam', 
        'ssc_board',
        'ssc_year',
        'ssc_group',   
        'ssc_roll',
        'ssc_registrationNo',
        'ssc_gpaaditional',
        'ssc_gpa',
        'hsc_exam',
        'hsc_board',
        'hsc_year',
        'hsc_group',
        'hsc_roll',
        'hsc_registrationNo',
        'hsc_gpaaditional',
        'hsc_gpa',
    ];
}
