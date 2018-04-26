<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Permohonan;
use Carbon\Carbon;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Permohonan::all();
        #$data = DB::table('permohonans')->get();
        $bil = 1;

        return view('permohonan/template_index', compact('data', 'bil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('permohonan/template_create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelajar' => 'required',
            'no_kp' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['tarikh_permohonan'] = Carbon::now();
        $data['status'] = 'pending';

        Permohonan::create($data);

        return redirect()->route('permohonan.index')->with('alert-success', 'Permohonan berjaya dikirimkan!');

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
        $user = Auth::user();

        $data = Permohonan::find($id);

        return view('permohonan/template_edit', compact('data', 'user'));
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
        $request->validate([
            'nama_pelajar' => 'required',
            'no_kp' => 'required'
        ]);

        $data = $request->all();

        $query = Permohonan::find($id);
        $query->update($data);

        return redirect()->route('permohonan.index')->with('alert-success', 'Permohonan berjaya dikemaskini!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = Permohonan::find($id);
        $query->delete();

        return redirect()->route('permohonan.index')->with('alert-success', 'Permohonan berjaya dihapuskan!');
    }
}
