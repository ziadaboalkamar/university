<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ["logo","address","name"];
    public $timestamps = true;
    protected $dates = ['deleted_at'];
}
