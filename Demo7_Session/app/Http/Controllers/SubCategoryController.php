<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    function list_sub_category(){
        $allMainCategories = Category::all()->toArray();
        // $subcat = Category::find("1")->sub_category_rel;
        // return $subcat;
        $catAndSubCat = Category::with("sub_category_rel")->get();
        
        // return view("backend.subcategory");
        return view("backend.subcategory", ["allSubCat"=>$catAndSubCat]);
    }

    function add_sub_category(Request $req){
        $mainCat = Category::find($req->category_id);
        // return $mainCat;
        $catStatus = $req["sub_cat_status"];

        if($catStatus == "on"){
            $catStatus = 1;
        }else{
            $catStatus = 0;
        }

        $subCat = new Subcategory();
        $subCat->sub_cat_name = $req->sub_cat;
        $subCat->sub_cat_status = $catStatus;
        $subCat->category_id = $req->category_id;
        $mainCat->sub_category_rel()->save($subCat);

        return redirect(route("name_list_sub_category"))->with("data", "Sub Category Added");   
    }

    function edit_sub_category(Request $req, $cat_id=null){
        
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
