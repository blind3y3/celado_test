<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $validated)
 * @method static orderBy(string $string, string $string1)
 */
class Feedback extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'feedbacks';

    protected $fillable = [
        'name',
        'email',
        'phone_number'
    ];

}
