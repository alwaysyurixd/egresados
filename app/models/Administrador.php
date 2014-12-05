<?php

class Administrador extends \Eloquent {
    protected $table = 'administrador';
    protected $primaryKey = 'usuario_idusuario';
    public $timestamps = false;

    public function User(){
        return $this->belongsTo('user','usuario_idusuario');
    }
}