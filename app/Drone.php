<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drone extends Model
{
    protected $fillable = ['name','description'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'drones';

    public function users() {
        return $this->belongsToMany('App\User', 'drone_users', 'drone_id', 'user_id');
    }
}
