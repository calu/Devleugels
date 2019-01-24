<?php

namespace App\Http\Controllers;

use App\Intake;
use Illuminate\Http\Request;
use App\Http\Requests\IntakeRequest;
use Illuminate\Support\Facades\DB;

class IntakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

 /** ook goed $intakeo = DB::table('intakes')
              ->where('openstaand', true)
              ->paginate(10); **/
        $intakeo = Intake::where('openstaand', true)->paginate(10);
        $intaket = Intake::where('openstaand', false)->paginate(10);
        return view('intakes.index', compact('intakeo','intaket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intakes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IntakeRequest $request)
    {
        Intake::create($request->all());
        session()->flash('bericht', 'De gegevens werden verstuurd. We nemen binnenkort contact op');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Intake  $intake
     * @return \Illuminate\Http\Response
     */
    public function show(Intake $intake)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Intake  $intake
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $intake = Intake::findOrFail($id);
      return view('intakes.edit', compact('intake'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Intake  $intake
     * @return \Illuminate\Http\Response
     */
    public function update(IntakeRequest $request, $id)
    {
         $intake = Intake::findOrFail($id);
         $intake->update($request->all());
        $intakeo = Intake::where('openstaand', true)->paginate(10);
        $intaket = Intake::where('openstaand', false)->paginate(10);
        return redirect()->action('IntakeController@index');
        // als je kan toevoegen ,['page' => 3]
 //       return view('intakes.index', compact('intakeo','intaket'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Intake  $intake
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Intake::destroy($id);

          $intakeo = Intake::where('openstaand', true)->paginate(10);
          $intaket = Intake::where('openstaand', false)->paginate(10);
          return view('intakes.index', compact('intakeo','intaket'));
    }
}
