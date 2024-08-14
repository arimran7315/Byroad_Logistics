<?php

namespace App\Http\Controllers;

use App\Mail\completeEstimate;
use App\Models\Qoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QouteController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $qoute = Qoute::all();
        return view('admin.index',compact('qoute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estimatepage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'Email' => 'required',
            'phone' => 'required',
        ]);
        Qoute::create([
            'from' => $request->from,
            'to' => $request->to,
            'phone' => $request->phone,
            'name' => $request->name,
            'email' => $request->Email,
            'career' => $request->career,
            'condition' => $request->condition,
            'year' => $request->year,
            'model' => $request->model,
            'make' => $request->make,
            'date' => $request->date,
            'miles' => round($request->miles)
        ]);
        $EstimatemailData = [
            'title' => 'Estimate Detail',
            'head' => 'Our Team Contact You Shortly',
            'mile' => 'Mile :'.round($request->miles),
            'from' => 'From :'.$request->from,
            'to' => 'To :'.$request->to,
            'date' => 'Date :'.$request->date
        ];
        Mail::to($request->Email)->send( new completeEstimate($EstimatemailData) );
        $miles = $request->miles;
        return view('estimatecomplete', compact('miles'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $qoute = Qoute::find($id);
        return view('admin.viewQoute',compact('qoute'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
