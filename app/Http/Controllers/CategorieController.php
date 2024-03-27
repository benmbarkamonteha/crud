<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        return view("categorie.index",compact("categories"));
    }
    public function create(){
        return view('categorie.add');
    }
    public function save(Request $request){
    $data=$request->validate([
        'name'=>'required',
        'description'=>'required',
        'state'=>'required'
    ]);      
    $newcategory=Categorie::create($data);
    return redirect(route('categorie.index'))->with('success','Category created succefully');
    }
    public function edit(Categorie $categorie){
        return view('categorie.edit',['categorie'=>$categorie]);
    }
    public function update(Request $request, Categorie $categorie){
        $data=$request->validate([
            'name'=>'required',
            'description'=>'required',
            'state'=>'required'
        ]);
        $categorie->update($data);
        return redirect(route('categorie.index'))->with('success','Category updated  succefully');
    }
    public function destroy(Categorie $categorie){
        $categorie->delete();
        return redirect(route('categorie.index'))->with('success','Category Deleted succefully');

    }
}
