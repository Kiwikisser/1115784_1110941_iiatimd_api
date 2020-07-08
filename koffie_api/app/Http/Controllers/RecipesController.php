<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\UserRecipe;
use App\RecipeSupplement;

class RecipesController extends Controller
{
    public function show(){
        $all_recipes = UserRecipe::where('recipe_id','!=',null)->get();
        return $all_recipes;
    }
    public function getRecipesFromUserName($username){
        $user_recipes = UserRecipe::where('user_name','=',$username)->get();
        return $user_recipes;
    }
    public function store(Request $request){
        $data = $request->all();
        $randomId = Str::random(9);
        $new_recipe_response = $data;
        $new_recipe = new UserRecipe();
        $new_recipe->recipe_id = $randomId;
        $new_recipe->user_name = "mauriccio"; 
        $new_recipe->recipe_name = $data['recipe_name']; 
        $new_recipe->recipe_ingredients = $data['recipe_ingredients']; 
        $new_recipe->coffee_bean = $data['coffee_bean'];
        $new_recipe->coffee_servings = $data['coffee_servings'];
        $new_recipe->coffee_prep_time = $data['coffee_prep_time'];
        $new_recipe->save();
        $response_data = [
            "recipe_id" => $randomId,
            "user_name" => "mauriccio",
            "recipe_name" => $data['recipe_name'],
            "recipe_ingredients" => $data['recipe_ingredients'],
            "coffee_bean" => $data['coffee_bean'],
            "coffee_servings" => $data['coffee_servings'],
            "coffee_prep_time" => $data['coffee_prep_time']
        ];
        return response()->json($response_data);
    }
}
