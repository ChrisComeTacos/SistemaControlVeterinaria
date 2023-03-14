<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialesController extends Controller
{

    public function index()
    {
        return 'index de materiales';
    }


    public function create()
    {
        return 'create de materiales';
    }

    public function store(Request $request)
    {
        return 'store de materiales';
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
