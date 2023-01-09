<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddModel extends Model
{
    use HasFactory;
    protected $table = 'tb_user';
    public $timestamps = false;
}
