<?php

namespace App\Http\Controllers;

use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use App\Provider;
use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.puchases.index',['purchases' => Purchase::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.purchases.create',['providers' => Provider::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $purchase = Purchase:create($request->validated());

        foreach ($request->product_id as $key => $produ)
        {
            $result[] = array('product_id' => $request->product_id[$key],
                              'quantity' => $request->quantity[$key],
                              'price' => $request->price[$key]
        );
        }

        $purchase->purchaseDetail()->createMany($result);
        return redirect()->route('purchases.index')>with('status','La compra se cargo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        return view('admin.purchases.show',['purchase' => $purchase]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        $providers = Provider::plunk('id','name');
        return view('admin.purchases.edit',['providers' => $providers,
                                            'purchase' => $purchase ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Purchase $purchase)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
