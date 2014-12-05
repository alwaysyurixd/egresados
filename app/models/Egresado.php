<?php

class Egresado extends \Eloquent {
    protected $table = 'egresado';
    protected $primaryKey = 'usuario_idusuario';
    public $timestamps = false;

    public function Usuario(){
        return $this->belongsTo('usuario','usuario_idusuario');
    }
    public function Empresa(){
        return $this->belongsTo('empresa','idEmpLabora');
    }
}