<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warehouse;

class WarehouseController extends Controller{

    public function insertWarehouse(Request $request) {
        try{
            $request->validate([
                'cdproduct' => 'required|string|max:4',
                'cdstore' => 'required|string|max:4'
            ]);
            
            $Warehouse = new Warehouse([
                'cd_product' => $request->cdproduct,
                'cd_store' => $request->cdstore,
                'qtd_product' => $request->qtdproduct
            ]);
                
            $Warehouse->save();

            return response()->json([
                'message' => __('Store.insert_ok')
            ], 201);
        } catch (\Exception $e){
            return response()->json(['error'=> $e], 400);
        }
    } 

    public function updateWarehouse(Request $request, $id) {
        try{
            $Warehouse = Warehouse::findOrFail($id);

            $Warehouse->fill($request->all())->save();

            return response()->json(['data'=> $Warehouse]);
        } catch (\Exception $e){
            return response()->json(['error'=> $e], 400);
        }
    }

    public function deleteWarehouse(Request $request, Warehouse $Warehouse) {
        try{
            $Warehouse = Warehouse::findOrFail($request->id);
            $Warehouse->delete();
        } catch (\Exception $e){
            return response()->json(['error'=> $e], 400);
        }
    }

    public function getWarehouses(Request $request) {
        $Warehouses = Warehouse::all()->sortBy('cd_store')->values()->all();
        return $Warehouses;
    }
}
