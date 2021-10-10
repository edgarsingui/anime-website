<?php

namespace App\Http\Controllers\Website;

use App\Anime;
use App\Category;
use App\Http\Controllers\Controller;
use App\Trending;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $destaques = Trending::join('animes','animes.id','=','anime_id')->join('categories','animes.category_id','=','categories.id')->get(['animes.title','categories.name as category','trendings.img']);
        $categorias = Category::all();
        $tendencias = Anime::all();
        return view("home.home")->with(['categorias'=>$categorias,'tendencias'=>$tendencias,'destaques'=>$destaques]);
    }

    public function anime($slug)
    {
        $categorias = Category::all();
        $anime = Anime::join('categories','animes.category_id','=','categories.id')->join('studios','animes.studios','=','studios.id')->where('animes.slug',$slug)->get(['categories.id','categories.name as category','animes.img','animes.views','animes.title','animes.description','animes.type','studios.name as studios','animes.status','animes.genre','animes.scores','animes.duration','animes.quality','animes.views']);
        $semelhantes = Anime::where('category_id',$anime[0]->id)->get(['animes.title','animes.slug','animes.views','animes.img']);
        return view('anime.detalhes')->with(['categorias'=>$categorias,'anime'=>$anime,'semelhantes'=>$semelhantes]);
    }

    public function assistir(string $slug,int $episodio)
    {
        $categorias = Category::all();
        $anime = Anime::join('videos','anime_id','=','animes.id')->join('categories','animes.category_id','=','categories.id')->where('animes.slug',$slug)->where('ep_number',$episodio)->get(['title','link','ep_name','ep_number','name as CategoryName']);
        $eplist = Anime::join('videos','anime_id','=','animes.id')->where('slug',$slug)->get(['animes.slug','ep_name','ep_number']);
        return view('anime.video')->with(['categorias'=>$categorias,'anime'=>$anime,'episodios'=>$eplist]);
    }
}
