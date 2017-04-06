<?php

namespace App\Http\Controllers;

use App\Subcategory;
use Illuminate\Http\Request;

class ajaxController extends Controller
{
    public function getSubcategory(Request $request){
        echo $request->get('category');
        $subcategories = Subcategory::where('category_id','=',$request->get('category'))->get();

        echo '<option value="">-- Select Subcategory --</option>';
        foreach ($subcategories as $subcategory){
            echo '<option value="'. $subcategory->id .'">'. $subcategory->subcategoryName .'</option>';
        }
    }
}
