<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'usuario';
    protected $primaryKey = 'idusuario';
    public $timestamps = false;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('contrasena', 'remember_token');

    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    public function administrador()
    {
        return $this->hasOne('administrador','usuario_idusuario','idusuario');
    }
    public function egresado()
    {
        return $this->hasOne('egresado','usuario_idusuario','idusuario');
    }

}
