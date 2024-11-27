<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    use HasFactory;

    protected $table = 'system_settings'; // Ensure the table name is correct

    // Define the fillable attributes
    protected $fillable = [
        'title',
        'email',
        'system_name',
        'copyright_text',
        'logo',
        'favicon',
        'description',
    ];
}
