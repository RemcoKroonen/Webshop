<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
    	$articles = article::all();
    	return view('article')->with('articles', $articles);
    	 //return  article::all();
         //return view('article')->with('articles', $articles);
         //return view('artikel');
    }

    public function articlesincategorie($categorie_id){

    	$articlesincategorie = article::where('categorie_id', '=' , $categorie_id)->get();
    	return view('articlesincategorie')->with('articlesincategorie', $articlesincategorie);
    	//return article::where('categorie_id', '=' , $categorie_id)->get();

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function create()
    //{
        //
    //}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   // public function store(Request $request)
   // {
        //
    //}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = article::where('id', '=' , $id)->get();
        return view('articledetail')->with('articles', $articles);
    	//return view('articlesincategorie')->with('articlesincategorie', $articlesincategorie);
    	//return article::where('categorie_id', '=' , $categorie_id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //*public function edit($id)
    //{
        //
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function update(Request $request, $id)
    //{
        //
    //}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  //  public function destroy($id)
    //{
        //
   // }
}
