<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Diagnostico extends Model
{
   
    protected $table = 'diagnosticos';

   
    
    protected $fillable = ['nombre', 'apellido', 
    						'edad','peso','sangre_tipo',
    						'alergias','expediente',
    						'antecedentes','examen_orina',
    						'examen_heces','observaciones','path'
    						];
    public function setPathAttribute($path){
    	$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
    	$name =  Carbon::now()->second.$path->getClientOriginalName();
    	\Storage::disk('local')->put($name, \File::get($path));

    }

}
