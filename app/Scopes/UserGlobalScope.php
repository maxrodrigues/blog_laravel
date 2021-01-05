<?php

namespace App\Scopes;

use App\Scopes\UserScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait UserGlobalScope{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new UserScope());

        static::creating(function(Model $model){
            $accountId = Auth::user()->id;
            $model->user_id = $accountId;
        });
    }


}

