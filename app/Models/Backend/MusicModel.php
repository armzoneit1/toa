<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicModel extends Model
{
    use HasFactory;
    protected $table = 'tb_music';
    protected $primaryKey = 'id';
    public $timestamp = false;
}
