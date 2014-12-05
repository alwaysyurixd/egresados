<?php

class Empresa extends Eloquent {

    protected $table = 'emplabora';
    protected $primaryKey = 'idEmpLabora';
    public $timestamps = false;

    public function egresado()
    {
        return $this->hasMany('egresado','idEmpLabora','idEmpLabora');
    }

}
