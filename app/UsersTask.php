<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersTask extends Model
{
    protected $table = "users_task";
    protected $fillable = [
        'task_id',
        'task_name',
        'active'
    ];
}
