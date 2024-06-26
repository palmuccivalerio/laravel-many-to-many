<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
     protected $fillable = [
         'title',
         'content',
         'slug',
         'type_id',
       
     ];
   
     public function type()
     {
         return $this->belongsTo(Type::class);
         
     }


     // app/Models/Project.php

public function technologies()
{
    return $this->belongsToMany(Technology::class);
}


}
