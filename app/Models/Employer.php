<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{

    public function jobs() {
        return $this->hasMany(Job::class);
    }
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;
}
