<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadFoto extends Model
{
    use HasFactory;
    protected $fillable = ['nim', 'nama','images'];
}
