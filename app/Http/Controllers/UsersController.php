<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # Dapatkan SEMUA rekod dari table users
        // $users = DB::table('users')->get();
        # Dapatkan data dari column - column tertentu
        // $users = DB::table('users')->select('id','nama','email','telefon')->get();
        # Dapatkan data berdasarkan condition where
        // $users = DB::table('users')
        // ->where('role', '=', 'user')
        // ->select('id','nama','email','telefon')
        // ->get();
        # Dapatkan data berdasarkan sorting
        // $users = DB::table('users')
        // ->orderBy('nama', 'asc')
        // ->get();
        # Dapatkan SEMUA data dan paginationkan dia
        $users = DB::table('users')
        ->join('roles', 'users.role', '=', 'roles.id')
        ->select('users.*', 'roles.name as nama_role')
        ->orderBy('users.id', 'asc')
        ->paginate(2);

        # Bilangan perkara
        $bil = 1;
        # Paparkan template index dari folder users dan sertakan sekali variables $users
        return view('users/template_index', compact('users', 'bil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = null;
        $roles = DB::table('roles')->select('name', 'id')->get();

        # Bagi respon papar template create user
        return view('users/template_create', compact('user', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #Buat validation
        // $this->validate($request, [
        //     'nama' => 'required|min:3',
        //     'email' => 'required|email'
        // ]);
        # Code validation baru (> Laravel 5.5)
        $request->validate([
            'nama' => 'required|min:3',
            'password' => 'required|min:3|confirmed',
            'email' => 'required|email',
            'telefon' => 'required'
        ]);

        # Dapatkan SEMUA data daripada borang users/template_create.blade.php
        // $data = $request->all();
        # Dapatkan 1 data sahaja daripada borang ~ nama
        // $data = $request->input('nama');
        # Dapatkan nama, email dan telefon sahaja

        $data = $request->only('nama', 'email', 'telefon', 'role');
        $data['password'] = bcrypt( $request->input('password') );

        # Dapatkan SEMUA data KECUALI telefon, 'role'
        // $data = $request->except('telefon', 'role');

        #Simpan data ke dalam table users
        DB::table('users')->insert($data);
        # Beri respon redirect ke halaman senarai users dan sertakan session alert-success
        return redirect()->route('users.index')->with('alert-success', 'Rekod berjaya ditambah!');
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
        $user = DB::table('users')
        ->where('id', '=', $id)
        ->first();
        # Dapatkan data dari table roles
        $roles = DB::table('roles')->select('name', 'id')->get();

        return view('users/template_edit', compact('user', 'roles'));
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
        # Code validation baru (> Laravel 5.5)
        $request->validate([
            'nama' => 'required|min:3',
            'password' => 'confirmed',
            'email' => 'required|email'
        ]);

        $data = $request->only('nama', 'email', 'telefon', 'role');
        # Semak jika password tidak kosong

        if ( ! empty ( $request->input('password') ) AND ! is_null( $request->input('password') ) )
        {
            $data['password'] = bcrypt( $request->input('password') );
        }

        $user = DB::table('users')->where('id', '=', $id)->update($data);

        return redirect()->route('users.index')->with('alert-success', 'Data berjaya dikemaskini!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = DB::table('users')->where('id', '=', $id)->delete();

        return redirect()->route('users.index')->with('alert-success', 'Data berjaya dihapuskan!');
    }


    
}
