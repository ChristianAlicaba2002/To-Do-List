<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskCategoryRelation extends Model
{
    protected $table = 'tast_category_relation';
    protected $fillable = [
        'task_id',
        'category_id',
    ];
}
