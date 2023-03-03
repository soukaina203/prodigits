<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return response()->json($data);
    }



    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description' => 'required',
            'price' => 'required'
        ]);



        return response()->json([
            'message'=>'Item added successfully'
        ]);



        // return redirect('/')->with('success', 'Personnage Ajouté avec succès');
    }


    // public function show($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return view('first.show', ['productTarget' => $product]);
    // }


    // public function edit($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return view('first.edit', ['productTarget' => $product]);


    // }

    // public function update(Request $request, $id)
    // {
    //     $Product = Product::findOrFail($id);
    //     $Product->title = $request->input('title');
    //     $Product->prix = $request->input('prix');

    //     $Product->update();
    //     return redirect('/')->with('success', 'Personnage Modifié avec succès');
    // }

    // public function destroy($id)
    // {
    //     $Product = Product::findOrFail($id);
    //     $Product->delete();
    //     return redirect('/')->with('success', 'Personnage Modifié avec succès');
    // }

}
