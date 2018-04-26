<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use DataTables;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$roles = Role::all();

        return view('roles.template_index');
    }

    public function datatables()
    {
        $roles = Role::select('id', 'name');

        return Datatables::of($roles)
        ->addColumn('tindakan', function($item) {

            return '

            <a href="/roles/'. $item->id .'/edit" class="btn btn-info btn-sm">Edit</a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#role-'. $item->id.'">
                Delete
            </button>

            <!-- Modal -->
            <form method="POST" action="'. route('roles.destroy', ['id' => $item->id]).'">
                <input type="hidden" name="_method" value="DELETE">
                '.csrf_field().'
            <div class="modal fade" id="role-'. $item->id .'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengesahan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Adakah anda ingin hapuskan rekod berikut:</p>
                    <ul>
                        <li>Nama Role: '.$item->name.'</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Sah Hapus</button>
                  </div>
                </div>
              </div>
            </div>
        </form>

            ';

        })
        ->rawColumns(['tindakan'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.template_create');
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
            'name' => 'required|min:3'
        ]);

        $data = $request->all();

        Role::create($data);

        return redirect()->route('roles.index')->with('alert-success', 'Rekod berjaya ditambah');
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
        $role = Role::find($id);

        return view('roles.template_edit', compact('role'));
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
        $data = $request->all();

        $role = Role::find($id);
        $role->update($data);

        return redirect()->route('roles.index')->with('alert-success', 'Data berjaya dikemaskini');
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
