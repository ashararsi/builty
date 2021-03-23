<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Catagory;


class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('admin.all')) {
            return abort(401);
        }
        $data = Catagory::all();
        return view('admin.main.category.index', compact('data'));
    }

    public function datatables(Request $request)
    {
        if (!Gate::allows('admin.all')) {
            return abort(401);
        }
        $data = Catagory::all();
        return datatables()->of($data)->toJson();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('admin.all')) {
            return abort(401);
        }
        return view('admin.main.category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('admin.all')) {
            return abort(401);
        }
        $data = new Catagory();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        if (!Gate::allows('admin.all')) {
            return abort(401);
        }
        $data = Catagory::find($id);
        return view('admin.main.category.edit', compact('data'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Catagory::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (!Gate::allows('admin.all')) {
            return abort(401);
        }

        $data = Catagory::find($id);
        $data->delete();
        return redirect()->route('admin.category.index');


    }
}
