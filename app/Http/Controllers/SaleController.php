<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\Sale\StoreRequest;
use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    
    public function index()
    {
        return view('admin.sales.index',['Sales' => Sale::get()]);
    }

    
    public function create()
    {
        return view('admin.sales.create',['client' => Client::plunk('id','name')]);
    }

   
    public function store(StoreRequest $request)
    {
        $sale = Sale::create($request->validated());

        foreach ($request->product_id as $key => $produ)
        {
            $result[] = array('product_id' => $request->product_id[$key],
                              'quantity' => $request->quantity[$key],
                              'price' => $request->price[$key],
                              'discount' => $request->discount[$key]
        );
        }

        $sale->saleDetaill()->createMany($result);
        return redirect()->route('sales.index')->with('status','La compra se cargo con exito');
    }

   
    public function show(Sale $sale)
    {
        return view('admin.sales.show',['sale' => $sale]);
    }

    
   
}
