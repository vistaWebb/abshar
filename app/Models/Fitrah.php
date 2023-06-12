<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitrah extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = "fitrahs";
    protected $guarded = [];
}
