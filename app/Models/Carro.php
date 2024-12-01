<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
public function pessoa()
{
    return $this->belongsTo(Pessoa::class);
}

}
