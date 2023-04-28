<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function add_new_cat(Request $req){
        $catName = $req["cat_name"];
        $catStatus = $req["cat_status"];

        if($catStatus == "on"){
            $catStatus = 1;
        }else{
            $catStatus = 0;
        }

        $cat = new Category();
        $cat->cat_name = $catName;
        $cat->cat_status = $catStatus;
        $cat->save();

        return redirect(route("name_main_cat_list"))->with("success", "Category Added");
    }

    function main_cat_list(){
        $all_cat = Category::all()->toArray();
        return view("backend.category", ["all_category"=>$all_cat]);
    }

    function edit_main_category(Request $req, $cat_id=null){
        
        $cat_single_data = Category::find($cat_id);
        if($cat_single_data){
            $cat_single_data = Category::find($cat_id);
            return redirect()->route("name_main_cat_list", ["cat_name"=>$cat_single_data["cat_name"], "cat_id"=>$cat_single_data["id"], "action"=>"edit_cat"]);
        }else{
            return redirect(route(("name_Category")));
        }
        // if($cat_id!=null && $cat_single_data){
        //     $cat_single_data = Category::find($cat_id);
        //     return view("add-category", ["cat_single_data"=>$cat_single_data]);
        // }else{
        //     return redirect(route(("name_Category")));
        // }
    }
}
