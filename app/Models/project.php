<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $primaryKey = 'project_id';
    //protected $keyType = 'string';
    public $timestamps=false; //disabale the created_at & updated_at field (so we wont get error column not found)
}
