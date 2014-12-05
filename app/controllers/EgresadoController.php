<?php

class EgresadoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /egresado
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$egresados = Usuario::where('tipousuario','=',2)->get();
        return View::make('administrador.index',['egresados'=>$egresados]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /egresado/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('administrador.nuevo_usuario');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /egresado
	 *
	 * @return Response
	 */
	public function getStore()
	{
		$usuario = new Usuario;
        $usuario->usuario = Input::get('usuario');
        $usuario->contrasena = Hash::make(Input::get('password'));
        $usuario->dni = Input::get('dni');
        $usuario->apaterno = Input::get('ap_paterno');
        $usuario->amaterno = Input::get('ap_materno');
        $usuario->prinombre = Input::get('nombre');
        $usuario->direccion01 = Input::get('direccion');
        $usuario->telefono01 = Input::get('telefono');
        $usuario->email = Input::get('email');
        $usuario->tipousuario = 2;
        $usuario->save();
        $egresado = new Egresado;
        //$egresado->usuario()->associate($usuario);
        $egresado->usuario_idusuario = $usuario->idusuario;
        $egresado->codigoexalumno = Input::get('codigo');
        $egresado->save();
        return Redirect::to('egresado')->with('status','ok_create');
	}

	/**
	 * Display the specified resource.
	 * GET /egresado/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /egresado/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
        $egresado = DB::table('egresado')->join('usuario','egresado.usuario_idusuario','=','usuario.idusuario')
                                         ->join('emplabora','egresado.idEmpLabora','=','emplabora.idemplabora')
                                         ->where('egresado.usuario_idusuario','=',$id)
                                         ->first();
		return View::make('administrador.edit_egresado',['egresados'=>$egresado]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /egresado/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getUpdate($id)
	{
        $usuario = Usuario::find($id);
        $usuario_id = rand(0,1000);
        $usuario->idusuario = $usuario_id;
        $usuario->usuario = Input::get('usuario');
        $usuario->contrasena = Input::get('password');
        $usuario->dni = Input::get('dni');
        $usuario->apaterno = Input::get('ap_paterno');
        $usuario->amaterno = Input::get('ap_materno');
        $usuario->prinombre = Input::get('nombre');
        $usuario->direccion01 = Input::get('direccion');
        $usuario->telefono01 = Input::get('telefono');
        $usuario->email = Input::get('email');
        $usuario->tipousuario = 2;
        $usuario->save();
        $egresado = Egresado::find($usuario_id);
        //$egresado->usuario()->associate($usuario);
        $egresado->usuario_idusuario = $usuario_id;
        $egresado->codigoExAlumno = Input::get('codigo');
        $egresado->save();
        return Redirect::to('egresado')->with('status','ok_update');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /egresado/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{
		$egresado = Usuario::find($id);
        $egresado->delete();
        return Redirect::to('egresado')->with('status','ok_delete');;
	}
    public function getSearch()
    {
        $key = Input::get('key');
        $egresado = DB::table('usuario')->where('apaterno','=',$key)
                                        ->orwhere('amaterno','=',$key)
                                        ->get();
        return View::make('administrador.result_egresados',['egresados'=>$egresado]);
    }

}