<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
   public function index()
    {
        return view('admin.clients.index',['clients' => Client::get()]);
    }

    
    public function create()
    {
        return view('admin.clients.create');
    }

   
    public function store(StoreRequest $request)
    {
        Client::create($request->validated());
        return redirect()->route('clients.index')->with('status','El cliente se agrego correctamente');
    }

    
    public function show(Client $client)
    {
        return view('admin.clients.show',['client' => $client]);
    }

   
    public function edit(Client $client))
    {
        return view('admin.clients.edit',['client' => $client]);
    }

   
    public function update(UpdateRequest $request, Client $client))
    {
        $clients->update($request->validated());
        return redirect()->route('clients.index')->with('status','El cliente se actualizo correctamente');
    }

   
    public function destroy(Client $client))
    {
        $client->delete();
        return redirect()->route('clients.index')->with('status','El cliente se elimino correctamente');
    }
}
