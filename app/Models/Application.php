<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = ['logo','name_bn','name_en','spouse','spouse_designation','father','father_designation','mother','mother_designation','present_address','mobile','email','permanent_address','birthdate','occupation','education','csrf','logo_signature','form_serial'];
}
