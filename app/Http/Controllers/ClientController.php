<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        return view('index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = Client::create([
            'name' => $request->input('name'),
            'telephone' => $request->input('telephone'),
            'date_of_birth' => $request->input('date_of_birth'),
            'cpf' => $request->input('cpf')
        ]);

        $client->address()->create([
            'road' => $request->input('road'),
            'number' => $request->input('number'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
        ]);

        return redirect()->route('client.index')->with('success', 'client created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        
        return view('show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        
        return view('edit', ['client' => $client]);
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
        $client = Client::find($id);

        $client->update([
            'name' => $request->input('name'),
            'telephone' => $request->input('telephone'),
            'date_of_birth' => $request->input('date_of_birth'),
            'cpf' => $request->input('cpf')
        ]);

        $client->address->update([
            'road' => $request->input('road'),
            'number' => $request->input('number'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
        ]);

        return redirect()->route('client.index')->with('success', 'client updated successfully');
    }

    public function delete($id)
    {
        $client = Client::find($id);

        return view('delete', ['client' => $client]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->address->delete();
        $client->delete();

        return redirect()->route('client.index')->with('success', 'client deleted successfully');
    }
}
