<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $alumnos = Alumno::all();
      //$alumnos = ['nombre' => 'marcos', 'nombre' => 'omar'];
      return view( 'alumnos.indexAlumno', compact( "alumnos" ) );   //Estudiar este caso
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.formAlumnos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar info 
        //insertar a base de datos
        //redireccionar
        //$alumno = new Alumno();
        //$alumno->nombre =$request->input('nombre');
        //$alumno->codigo = $request->input('codigo');
        //$alumno->carrera = $request->carrera;
        //dd($request->all()); Este metodo sirve para ver todos los datos almacenados en el envio del formulario
        //dd($alumno);
        //$alumno->save();
        //return redirect('/');
        //return redirect()->route('alumno.index');

        //$request->validate([
            //'nombre' => 'required|min:20'
            //'codigo' => 'required|max:10'
            //'carrera' => 'required|max:25'
        //]);
        Alumno::create( $request->all() );
        return redirect()->route('alumnos.indexAlumnos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumnum)
    {
        //$alumno = Alumno::with('category')->get()->find($codigo);
        //$alumno = Alumno::with('codigo')->whereIn('codigo', $codigo)->get();
        //->with(['id' => $id, 'nombre' => "Prog-para internet"]);
        //return view('alumnos.showAlumno', $alumno)->with(['materia' => $materium]);
        return view('alumnos.showAlumno')->with(['alumno' => $alumnum]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumnum)
    {
        //return view('alumnos.formEditAlumno', compact('alumno'));
        return view('alumnos.formAlumnos')->with(['alumno' => $alumnum]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumnum)
    {
        //validar info
        //$alumno = $_POST['alumno'];
        //actualizar base de datos
        //redireccionar /alumno/show/$id

        //$alumno->nombre =$request->input('nombre');
        //$alumno->codigo = $request->input('codigo');
        //$alumno->carrera = $request->carrera;
        //$alumno->save();

        //        Alumno::where('id', $alumno->id)->update($request->all() );
        Alumno::where( 'id', $alumnum->id )->update( $request->except('_token', '_method') );

        return redirect()->route('alumno.show', $alumnum->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumnum)
    {
        //changin some stug
        $alumnum->delete();
        return redirect()->route('alumnos.indexAlumnos');
    }
}
