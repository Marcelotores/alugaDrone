<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlugaDrone extends Model
{
  protected $fillable = ['drone_id', 'user_id', 'valor', 'data_inicio', 'data_final'];
  protected $guarded = ['created_at', 'update_at'];
  protected $table = 'drone_users';
}
