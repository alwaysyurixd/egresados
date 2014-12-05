<?php

class EmpresaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /empresa
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$empresa = Empresa::all();
        return View::make('administrador.empresa',['empresas'=>$empresa]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /empresa/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('administrador.nuevo_empresa');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /empresa
	 *
	 * @return Response
	 */
	public function getStore()
	{
        $empresa = new Empresa;
        $empresa->nombreEmp = Input::get('nombre');
        $empresa->direccionEmp = Input::get('direccion');
        $empresa->telefonoEmp = Input::get('telefono');
        $empresa->emailEmp = Input::get('email');
        $empresa->save();
        return Redirect::to('empresa')->with('status','ok_create');
	}

	/**
	 * Display the specified resource.
	 * GET /empresa/{id}
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
	 * GET /empresa/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$empresa = Empresa::find($id);
        return View::make('administrador.edit_empresa',['empresa'=>$empresa]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /empresa/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getUpdate($id)
	{
		$empresa = Empresa::find($id);
        $empresa->nombreEmp = Input::get('nombre');
        $empresa->direccionEmp = Input::get('direccion');
        $empresa->telefonoEmp = Input::get('telefono');
        $empresa->emailEmp = Input::get('email');
        $empresa->save();
        return Redirect::to('empresa')->with('status','ok_update');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /empresa/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}