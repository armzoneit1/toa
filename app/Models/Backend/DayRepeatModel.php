<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayRepeatModel extends Model
{
    use HasFactory;
    protected $table = 'tb_day';
    protected $primaryKey = 'id';
    public $timestamp = false;
}