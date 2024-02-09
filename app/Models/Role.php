<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = true;

    public function permissions()
    {
        return $this->hasMany(PermissionRoles::class, 'role_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($role) {
    //         $role->slug = Str::slug($role->name);
    //     });
    // }
}
