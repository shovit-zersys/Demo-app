<?php

namespace Shovit\DemoPackage\Http\Controllers;
use Illuminate\Http\Request;
use Shovit\DemoPackage\Models\Wish;

class MyPackageController{
    public function index()
    {
        return view('demopackage::birthday');
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female,other',
        ]);

        $wish = Wish::create($validatedData);

        $response = "Happy birthday";

        return response()->json([
            'message' => $response . ' ' . $wish->name,
            'details' => $wish,
            201
        ]);
    }
    
}
