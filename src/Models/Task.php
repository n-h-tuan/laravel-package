<?php

namespace Tuanhoang\Demopackage\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
    protected $table = "tasks";
    protected $fillable = ['name','deadline_at'];
    protected $dates = ['deleted_at'];
}
