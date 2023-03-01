<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public $recipes = [
        ['id' => 1, 'name' => 'Carbonara','nation' => 'Italia', 'portata' => 'Primo', 'img' => 'https://d15j9y5wlusr11.cloudfront.net/filer_public_thumbnails/filer_public/5a/4b/5a4be002-5bd2-4de5-822e-888c3e179145/recipe.jpg__1200x1200_q80_ALIAS-extra_large_crop-smart_subsampling-2.jpg?format=webp'],
        ['id' => 2, 'name' => 'Risotto Milanese','nation' => 'Italia', 'portata' => 'Primo', 'img' => 'https://d15j9y5wlusr11.cloudfront.net/filer_public_thumbnails/filer_public/64/63/6463e944-0ddc-4afb-ba5a-a604e6b33e83/ricetta.png__1200x1200_q80_ALIAS-extra_large_crop-smart_subsampling-2.jpg?format=webp'],
        ['id' => 3, 'name' => 'Amatriciana','nation' => 'Italia', 'portata' => 'Primo', 'img' => 'https://d15j9y5wlusr11.cloudfront.net/filer_public_thumbnails/filer_public/aa/42/aa42dabb-ee07-437e-9f5f-c57107a88746/ricetta.png__1200x1200_q80_ALIAS-extra_large_crop-smart_subsampling-2.jpg?format=webp'],
        ['id' => 4, 'name' => 'Parmigiana','nation' => 'Italia', 'portata' => 'Primo', 'img' => 'https://d15j9y5wlusr11.cloudfront.net/filer_public_thumbnails/filer_public/ca/6e/ca6e318e-f863-4ea6-b6ae-dac2a2210dc8/recipe.jpg__1200x1200_q80_ALIAS-extra_large_crop-smart_subsampling-2.jpg?format=webp'],
        ['id' => 5, 'name' => 'Strudel','nation' => 'Austria', 'portata' => 'Dolce', 'img' => 'https://d15j9y5wlusr11.cloudfront.net/filer_public_thumbnails/filer_public/95/d7/95d73e0d-35ec-4d69-b223-5eaa11e8a354/ricetta.png__1200x1200_q80_ALIAS-extra_large_crop-smart_subsampling-2.jpg?format=webp'],
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