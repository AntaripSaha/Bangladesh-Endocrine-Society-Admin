<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Essential_Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function essential_category(){
        $degrees = Essential_Category::all();
        return view('admin.essential_categories',compact('degrees'));
    }
    public function essential_category_store(Request $req){
        $essential_category = new Essential_Category;
        $essential_category->degree = $req->degree;
        if($essential_category->save()){
            return redirect()->back()->with('success', 'Category Added Successfully');
        }
    }
    public function essential_category_delete($id){
        Essential_Category::find($id)->delete();
        return redirect()->back()->with('warning', 'Category Deleted Successfully');
    }
}

