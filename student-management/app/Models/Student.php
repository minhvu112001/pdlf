<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // Specify the table if it does not follow Laravel's convention
    protected $table = 'students';

    // Define the fillable attributes
    protected $fillable = [
        'name',
        'age',
        'address',
        'telephone',
    ];

}
