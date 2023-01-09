<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayoutModel extends Model
{
    use HasFactory;
    protected $table = 'tb_layout';
    protected $primaryKey = 'id';
    public $timestamp = false;
}
