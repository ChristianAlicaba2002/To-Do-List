<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskCategories extends Model
{
    protected $table = 'task_categories';
    protected $fillable = [
        'category_id',
        'name',
    ];
}
