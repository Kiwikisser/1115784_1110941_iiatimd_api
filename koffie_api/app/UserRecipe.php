<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRecipe extends Model
{
    protected $table = 'user_recipes';
    protected $primaryKey = 'recipe_id';
    public $incrementing = false;
}
