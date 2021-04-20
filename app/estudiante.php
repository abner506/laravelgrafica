<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
     //use HasFactory;
    protected $table="estudiante";
    protected $primaryKey="Matricula";
    protected$fillable = [
	'Nombre','Direccion','created_at','updated_at'
    ];
}
