<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Thought proces: we have a Todo that has a CRUD but only is being modified by the user that created it, therefore using belongsTo
}
