<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoneModel extends Model
{
    use HasFactory;
    protected $table = 'tb_zone';
    protected $primaryKey = 'id';
    public $timestamp = false;
}
