<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task_type', 'name', 'description', 'task_date', 'task_time'];
}
