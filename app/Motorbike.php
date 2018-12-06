<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Motorbike extends Model
{
    protected $guarded = [];
    public function admin()
    {
        return $this->belongsTo('App\User', 'admin_id');
    }
}
