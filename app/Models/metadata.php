<?php

namespace App\Models;

use App\Models\metadata;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class metadata extends Model
{
    use HasFactory;
    protected $table = "metadata";
    protected $fillable = ['meta_key', 'meta_value'];

}
