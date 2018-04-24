<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '<h1 style="color: red">Senarai Users</h1>';

        $users = [
            ['id' => 1, 'nama' => 'Ali Baba', 'telefon' => '0123456789', 'email' => 'ali@baba.com'],
            ['id' => 2, 'nama' => 'Ahmad Albab', 'telefon' => '0123456789', 'email' => 'ahmad@albab.com'],
            ['id' => 3, 'nama' => 'Siti Nurhaliza', 'telefon' => '0123456789', 'email' => 'ahmad@albab.com'],
            ['id' => 4, 'nama' => 'Aiman Tino', 'telefon' => '0123456789', 'email' => 'ahmad@albab.com'],
            ['id' => 5, 'nama' => 'Najib', 'telefon' => '0123456789', 'email' => 'ahmad@albab.com'],
        ];

        return view('users/template_index', compact('title', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        return Carbon::now();
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
