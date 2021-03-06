<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $fillable=['name','slug','description','role_id'];

    //RELACIONES
    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }


    //ALMACENAMIENTO

    public function store($request){


        $slug=str_slug($request->name,'-');
        //dd($slug);
        $request->merge(['slug'=>$slug]);
        alert('Exito','Permiso creado correctamente','success')->showConfirmButton();

        return self::create($request->input());




    }

    public function my_update($request){
        $slug=str_slug($request->name,'-');
        $request->merge(['slug'=>$slug]);
        self::update($request->input());
        alert('Exito','Permiso actualizado correctamente','success')->showConfirmButton();


    }

    //VALIDACION

    //RECUPERACION DE INFORMACION

    //OTRAS OPERACIONES

}

