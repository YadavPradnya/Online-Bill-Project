<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    function addCategory(){
        return view('Category.add');
    }
    // function storeCategory(Request $request){
    //   $request->validate(
    //             [
    //                 'name'=>'required',
    //                 'status'=>'required'

    //             ]
    //             );

    //         $Category= new Category();
    //         $Category->name=$request->name;
    //         $Category->status=$request->status;
    //         $Category->save();
    //         echo "add";

    //     }


    //
}
