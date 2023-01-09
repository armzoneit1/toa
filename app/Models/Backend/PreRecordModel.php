<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRecordModel extends Model
{
    use HasFactory;
    protected $table = 'tb_pre_record';
    protected $primaryKey = 'id';
    public $timestamp = false;
}
