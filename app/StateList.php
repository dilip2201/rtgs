<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StateList extends Model
{
	protected $table = 'state_list';
   	protected $fillable = [
        'state',
    ];
}
