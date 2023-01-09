<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRecordModel extends Model
{
    use HasFactory;
    protected $table = 'tb_record_from_user';
    public $timestamps = false;
}