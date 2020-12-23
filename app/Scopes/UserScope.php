<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class UserScope implements Scope{
    public function apply(Builder $builder, Model $model)
    {
        $id = Auth::user()->id;
        return $builder->where('user_id', $id);
    }
}
