<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eform extends Model
{
    use HasFactory;
    protected $table = "eform";
    protected $primaryKey = "e_id";
}
