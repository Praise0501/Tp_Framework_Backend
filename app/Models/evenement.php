<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
    use HasFactory;
    protected $fillable=["nom","date_demarrage","date_fin","description"];
    public $timestamps=false;
}
