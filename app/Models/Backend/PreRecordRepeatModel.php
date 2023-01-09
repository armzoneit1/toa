<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRecordRepeatModel extends Model
{
    use HasFactory;
    protected $table = 'tb_pre_record_repeat';
    protected $primaryKey = 'id';
    public $timestamp = false;
}
