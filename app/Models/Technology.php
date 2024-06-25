<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;




    // app/Models/Technology.php

public function projects()
{
    return $this->belongsToMany(Project::class);
}

}

// app/Models/Technology.php
