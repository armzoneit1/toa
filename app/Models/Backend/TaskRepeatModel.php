<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskRepeatModel extends Model
{
    use HasFactory;
    protected $table = 'tb_task_repeat';
    protected $primaryKey = 'id';
    public $timestamp = false;
}