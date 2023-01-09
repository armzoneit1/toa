<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistModel extends Model
{
    use HasFactory;
    protected $table = 'tb_playlist';
    protected $primaryKey = 'id';
    public $timestamp = false;
}
