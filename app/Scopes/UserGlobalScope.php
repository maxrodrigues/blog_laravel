<?php

namespace App\Scopes;

use App\Scopes\UserScope;

trait UserGlobalScope{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new UserScope());
    }
}

