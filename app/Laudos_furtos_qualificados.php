<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Laudos_furtos_qualificados extends Model
{

    use SoftDeletes;
    protected $date = ['deleted_at'];
}
