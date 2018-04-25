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
        ->orderBy('id', 'asc')
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
        # Bagi respon papar template create user
        return view('users/template_create');
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
            'role' => 'required|in:user,admin',
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
        $title = 'Halaman Edit';
        // return view('users/template_edit', ['id' => $id]);
        // return view('users/template_edit')->with('id', $id);
        return view('users/template_edit', compact('id', 'title'));
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
            'password' => 'required|min:3|confirmed',
            'email' => 'required|email',
            'role' => 'required|in:user,admin',
            'telefon' => 'required|regex:/^601\d{8,9}$/'
        ]);

        $data = $request->all();

        return $data;
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
