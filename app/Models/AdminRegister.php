<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRegister extends Model
{
    use HasFactory;
    protected $table = 'admin_registers';
    protected $primarykey = 'id';
    protected $fillable = ['email','password','status'];
}
