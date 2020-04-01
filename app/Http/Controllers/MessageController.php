<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store()
    {
         $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
         ]);
         // Mail::to('jorgealmarales22@gmail.com')->queue(new MessageReceived($msg));
         Contact::create($msg);
         return back()->with('status', 'recibimos tu mensaje, te responderemos en menos de 24 horas');
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
