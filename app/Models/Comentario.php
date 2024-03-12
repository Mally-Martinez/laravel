<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{   
    use HasFactory;
    protected $fillable = ['nombre','correo','comentario','ciudad','user_id'];
    
    //protected &guarded = ['id','created_at','updated_at'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
