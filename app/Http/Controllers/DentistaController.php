<?php

namespace App\Http\Controllers;

use App\Models\Dentista;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DentistasExport;

/**
 * Class DentistaController
 * @package App\Http\Controllers
 */
class DentistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dentistas = Dentista::paginate();

        return view('dentista.index', compact('dentistas'))
            ->with('i', (request()->input('page', 1) - 1) * $dentistas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dentista = new Dentista();
        return view('dentista.create', compact('dentista'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dentista::$rules);

        $dentista = Dentista::create($request->all());

        return redirect()->route('dentistas.index')
            ->with('success', 'Dentista created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dentista = Dentista::find($id);

        return view('dentista.show', compact('dentista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dentista = Dentista::find($id);

        return view('dentista.edit', compact('dentista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dentista $dentista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dentista $dentista)
    {
        request()->validate(Dentista::$rules);

        $dentista->update($request->all());

        return redirect()->route('dentistas.index')
            ->with('success', 'Dentista updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dentista = Dentista::find($id)->delete();

        return redirect()->route('dentistas.index')
            ->with('success', 'Dentista deleted successfully');
    }
    public function export()
    {
        return Excel::download(new DentistasExport, 'Dentistas.xlsx');
    
    }
    
}
