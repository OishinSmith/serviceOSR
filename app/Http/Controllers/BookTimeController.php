<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BookTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($source)
    {
        //do a little database searching to find the source of the customer we're trying to find
        // --> do query here

        // Retrieve data and create JSON response
        $data = [
            'source' => $source,
        ];

        // Render view with JSON data
        return view('book/BookTeeTime', ['data' => $data]);
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

    public function bookTime($id)
    {
        //do a little database searching to find the source of the customer we're trying to find
        // --> do query here

        // Retrieve data and create JSON response
        $data = [
            'source' => $id,
        ];
        $json = json_encode($data);

        // Render view with JSON data
        return $json;
    }
}
