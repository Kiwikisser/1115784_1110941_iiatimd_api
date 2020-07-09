<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
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
        $new_recipe = new UserRecipe();
        if(count($data) === 7){ // witouth internet connection, data comes from room, no response needed
            $new_recipe->recipe_id = $data['recipeId'];
            $new_recipe->user_name = $data['user_name'];
            $new_recipe->recipe_name = $data['recipe_name']; 
            $new_recipe->recipe_ingredients = $data['recipe_ingredients']; 
            $new_recipe->coffee_bean = $data['coffee_bean'];
            $new_recipe->coffee_servings = $data['coffee_servings'];
            $new_recipe->coffee_prep_time = $data['coffee_prep_time'];
            $new_recipe->save();
        }
        if(count($data) === 6){  // with internet connection, data comes from input form
            $new_recipe->recipe_id = $randomId;
            $new_recipe->user_name = $data['user_name'];
            $new_recipe->recipe_name = $data['recipe_name']; 
            $new_recipe->recipe_ingredients = $data['recipe_ingredients']; 
            $new_recipe->coffee_bean = $data['coffee_bean'];
            $new_recipe->coffee_servings = $data['coffee_servings'];
            $new_recipe->coffee_prep_time = $data['coffee_prep_time'];
            $new_recipe->save();
            $response_data = [
                "recipe_id" => $randomId,
                "user_name" => $data['user_name'],
                "recipe_name" => $data['recipe_name'],
                "recipe_ingredients" => $data['recipe_ingredients'],
                "coffee_bean" => $data['coffee_bean'],
                "coffee_servings" => $data['coffee_servings'],
                "coffee_prep_time" => $data['coffee_prep_time']
            ];
            return response()->json($response_data);
        }
    }
    
    public function update(Request $request){
        $data = $request->all();
        $recipe_record = UserRecipe::where("recipe_id", "=", $data['recipeId'])->first();
        $recipe_record->recipe_name = $data['recipe_name']; 
        $recipe_record->recipe_ingredients = $data['recipe_ingredients']; 
        $recipe_record->coffee_bean = $data['coffee_bean'];
        $recipe_record->coffee_servings = $data['coffee_servings'];
        $recipe_record->coffee_prep_time = $data['coffee_prep_time'];
        $recipe_record->save();
        $response_update_data = [
            "recipe_id" => $data['recipeId'],
            "user_name" => $data['user_name'],
            "recipe_name" => $data['recipe_name'],
            "recipe_ingredients" => $data['recipe_ingredients'],
            "coffee_bean" => $data['coffee_bean'],
            "coffee_servings" => $data['coffee_servings'],
            "coffee_prep_time" => $data['coffee_prep_time']
        ];
        return response()->json($response_update_data);
    }

    public function delete(Request $request){
        $data = $request->all();
        UserRecipe::where("recipe_id", "=", $data['recipeId'])->delete();
    }
}
