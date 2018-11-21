<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller

{   
    

    
    /**
     * Show the profile for the given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');

        //
    }

    public function toevoegen(Request $request, $article_id, $articles_ordered)
    {
         //$request->session()->put($article_id, $articles_ordered);
    	$request->session()->put($article_id, $articles_ordered);

        return $request->session()->get($article_id);
    }


}
