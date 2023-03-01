<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public $recipes = [
        ['id' => 1, 'name' => 'GTA5','date' => '2013-01-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/304447/3max.jpg'],
        ['id' => 2, 'name' => 'Final Fantasy XV','date' => '2014-02-01', 'console' => 'PS4', 'img' => 'https://static-it.gamestop.it/images/products/285875/3max.jpg'],
        ['id' => 3, 'name' => 'Hogwarts Legacy','date' => '2023-03-01', 'console' => 'PS4', 'img' => 'https://static-it.gamestop.it/images/products/310213/3max.jpg'],
        ['id' => 4, 'name' => 'FIFA23','date' => '2023-04-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/308404/3max.jpg'],
        ['id' => 5, 'name' => 'God of War Ragnarok','date' => '2022-05-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/309576/3max.jpg'],
    ];

    public function recipe_index() {
        return view('recipes', ['recipes' => $this->recipes]);
    }

    public function recipe_show($id) {
        forEach($this->recipes as $recipe) {
            if ($recipe['id'] == $id) {
                return view('dettaglio', ['recipe' => $recipe]);
            };
        };
    }
}
