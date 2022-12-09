<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaApiController extends Controller
{
    public function all()
    {
        $asignaturas = Asignatura::all()->toArray();

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => $asignaturas
            ]
        );

    }

    public function store(Request $request)
    {

        Asignatura::create($request->all());

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => ''
            ]
        );

    }

    public function edit($id)
    {
        $asignatura = Asignatura::find($id);

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => $asignatura->toArray()
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::find($id);

        $asignatura->update($request->all());

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => ''
            ]
        );
    }

    public function destroy($id)
    {
        Asignatura::destroy($id);
        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => ''
            ]
        );
    }
}
