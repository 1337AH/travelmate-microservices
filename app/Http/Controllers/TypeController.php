<?php

namespace App\Http\Controllers;

use App\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    

    public function index()
    {
        $type = Type::all();
        return response()->json($type);
    }

    /**
     * 
     */
    public function create(Request $request)
    {
        $type = Type::create($request->all());
        return response()->json($type);
    }

    /**
     * 
     */
    public function update(Request $request, $id)
    {
        $type = Type::find($id);
        $type->name = $request->input('name');
        $type->save();
        
        return response()->json($city);
        
    }

    /**
     * 
     */
    public function show($id)
    {
        $type = Type::find($id);
        
 
        return response()->json($type);
    }

    /**
     * 
     */
    public function destroy($id)
    {
        $type = Type::find($id);
    	$type->delete();
 
    	return response()->json('Removed successfully.');
    }
}
