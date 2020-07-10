<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coffee;

class CoffeeController extends Controller
{

      public function index(){
        return Coffee::where('coffee_name','!=',null)->get();
      }

      public function show($coffee){
        return Coffee::where('coffee_image', '=', $coffee)->get();
      }

      public function store(Request $request){
        $item = new Coffee();

        $item->coffee_name = $request->coffee_name;
        $item->coffee_ingredients = $request->coffee_ingredients;
        $item->coffee_description = $request->coffee_description;
        $item->coffee_bean = $request->coffee_bean;
        $item->coffee_servings = $request->coffee_servings;
        $item->coffee_preptime = $request->coffee_preptime;
        $item->coffee_image = $request->coffee_image;

        try {
          $item->save();
          return true;
        } catch (\Exception $e) {
          return $e;
        }
      }
}
