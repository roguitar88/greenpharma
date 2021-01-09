<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$sales = Sales::all();
        $sales = Sales::paginate(10);
        $salesCount = Sales::all();
        $links = $sales->links();
        return view('dashboard',compact('sales', 'salesCount', 'links'));
    }


    public function filter(Request $request)
    {
        //$sales->where('ean', '=', $request->ean);
        //->orWhere('address', 'like', '%' . $request['search'] . '%')
        //->orWhere('email', 'like', '%' . $request['search'] . '%')
        //->paginate(10);

        if($request->product){
            $sales = DB::select('select * from sales where product = ?', [$request->product]);
        }

        if($request->ean){
            $sales = DB::select('select * from sales where ean = ?', [$request->ean]);
        }

        if($request->description){
            $sales = DB::select('select * from sales where description = ?', [$request->description]);
        }

        if($request->twenty){
            $sales = DB::select('select * from sales where '. $request->twenty. ' != ?', ['-']);
        }

        if($request->twenty_one){
            $sales = DB::select('select * from sales where '. $request->twenty_one. ' != ?', ['-']);
        }

        $salesCount = Sales::all();

        return view('dashboard', compact('sales', 'salesCount'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
