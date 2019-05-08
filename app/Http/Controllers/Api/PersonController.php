<?php

namespace App\Http\Controllers\Api;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::orderBy('id', 'DESC')->paginate(5);
        return view('admin.person.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate{[
            'name_people' => 'require',
            'ci_people' => 'require',
            'mobile_people'=>'required',
            'province_people'=>'required',
            'canton_people'=>'required',
            'email'=>'required'
        ]};
        $person = new Person();
        $person->name_people = $request->name_people;
        $person->surname_people = $request->surname_people;
        $person->ci_people = $request->ci_people;
        $person->mobile_people = $request->mobile_people;
        $person->email_people = $request->email_people;
        $person->province_people = $request->province_people;
        $person->canton_people = $request->canton_people;
        $person->address_people = $request->address_people;
        $person->status_people = "activo";

        $person->save();





        return redirect()->route('persona.index')->with('info', 'Entrada creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
