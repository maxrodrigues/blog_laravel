<?php

namespace App\Models\admin;

use App\Models\User;
use App\Scopes\UserGlobalScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use UserGlobalScope;
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
