<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoreController extends Controller{

    public function insertStore(Request $request) {
        try{
            $request->validate([
                'cdstore' => 'required|string|max:4',
                'nmstore' => 'required|string|max:50'
            ]);
            
            $Store = new Store([
                'cd_store' => $request->cdstore,
                'nm_store' => $request->nmstore
            ]);
                
            $Store->save();

            return response()->json([
                'message' => __('Store.insert_ok')
            ], 201);
        } catch (\Exception $e){
            return response()->json(['error'=> $e], 400);
        }
    } 

    public function updateStore(Request $request, $cd_store) {
        try{
            $Store = Store::findOrFail($cd_store);
            $Store->fill($request->all())->save();

            return response()->json(['data'=> $Store]);
        } catch (\Exception $e){
            return response()->json(['error'=> $e], 400);
        }
    }

    public function deleteStore(Request $request, $cd_store) {
        try{
            $Store = Store::findOrFail($cd_store);
            $Store->delete();
        } catch (\Exception $e){
            return response()->json(['error'=> $e], 400);
        }
    }

    public function getStores(Request $request) {
        $Stores = Store::all()->sortBy('cd_store')->values()->all();
        return $Stores;
    }

}
