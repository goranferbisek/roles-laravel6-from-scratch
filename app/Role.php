<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $guarded = [];

    public function abilities()
    {
        return $this->belongsToMany(Ability::class)->withTimestamps();
    }

    public function allowTo($abitity)
    {
        if (is_string($abitity)) {
            $role = Role::whereName($abitity)->firstOrFail();
        }
        $this->abilities()->sync($abitity, false);
    }
}
