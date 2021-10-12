<?php

namespace App\Http\Controllers\Website;

use App\Anime;
use App\Category;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Trending;
use App\User;
use App\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {

        $diario = View::join('animes','animes.id','=','views.anime_id')->whereRaw('DAYOFYEAR(dtanime)=DAYOFYEAR(NOW())')->groupBy('views.anime_id')->get(['animes.img','animes.slug','animes.title']);
        $semanal = View::join('animes','animes.id','=','views.anime_id')->selectRaw('animes.title,animes.img,animes.slug, COUNT(views.id) as views')->whereRaw('YEARWEEK(dtanime)=YEARWEEK(NOW())')->groupBy('views.anime_id')->orderBy('views', 'DESC')->get(['animes.img','animes.slug','animes.title']);
        $mensal = View::join('animes','animes.id','=','views.anime_id')->selectRaw('animes.title,animes.img,animes.slug, COUNT(views.id) as views')->whereRaw('MONTH(dtanime)=MONTH(NOW())')->groupBy('views.anime_id')->orderBy('views', 'DESC')->get(['animes.img','animes.slug','animes.title']);
        $destaques = Trending::join('animes','animes.id','=','anime_id')->join('categories','animes.category_id','=','categories.id')->get(['animes.title','categories.name as category','trendings.img']);
        $categorias = Category::all();
        $tendencias = View::join('animes','animes.id','=','views.anime_id')->selectRaw('animes.id, animes.title,animes.img,animes.slug, COUNT(views.id) as views')->groupBy('animes.id')->take(8)->orderBy('id', 'DESC')->get();
        return view("home.home")->with(['categorias'=>$categorias,'tendencias'=>$tendencias,'destaques'=>$destaques,'mais_vistos'=>['diario'=>$diario,'semanal'=>$semanal,'mensal'=>$mensal]]);
    }

    public function anime($slug)
    {
        $categorias = Category::all();
        $anime = Anime::join('categories','animes.category_id','=','categories.id')->join('studios','animes.studios','=','studios.id')->where('animes.slug',$slug)->get(['animes.id as idanime','animes.slug','categories.id','categories.name as category','animes.img','animes.views','animes.title','animes.description','animes.type','studios.name as studios','animes.status','animes.genre','animes.scores','animes.duration','animes.quality','animes.views']);
        $semelhantes = Anime::where('category_id',$anime[0]->id)->get(['animes.title','animes.slug','animes.views','animes.img']);
        $comentarios = Comment::join('users','comments.user_id','=','users.id')->where('comments.anime_id',$anime[0]->idanime)->where('episode_id',NULL)->get();
        return view('anime.detalhes')->with(['categorias'=>$categorias,'anime'=>$anime,'semelhantes'=>$semelhantes,'comentarios'=>$comentarios]);
    }

    public function assistir(string $slug,int $episodio)
    {
        $categorias = Category::all();
        $anime = Anime::join('videos','anime_id','=','animes.id')->join('categories','animes.category_id','=','categories.id')->where('animes.slug',$slug)->where('ep_number',$episodio)->get(['animes.id as idanime','title','link','ep_name','ep_number','name as CategoryName']);
        $eplist = Anime::join('videos','anime_id','=','animes.id')->where('slug',$slug)->get(['animes.slug','ep_name','ep_number']);
        $comentarios = Comment::join('users','comments.user_id','=','users.id')->where('comments.anime_id',$anime[0]->idanime)->where('episode_id',$episodio)->get(['name','comments.comment']);

        if(!empty($anime[0])):
            return view('anime.video')->with(['categorias'=>$categorias,'anime'=>$anime,'episodios'=>$eplist,'comentarios'=>$comentarios]);
        else:
            return abort(404);
        endif;
    }

    public function categoria($slug)
    {
        $categorias = Category::all();
        $now = Category::where('slug',$slug)->get();
        $diario = View::join('animes','animes.id','=','views.anime_id')->whereRaw('DAYOFYEAR(dtanime)=DAYOFYEAR(NOW())')->groupBy('views.anime_id')->get(['animes.img','animes.slug','animes.title']);
        $semanal = View::join('animes','animes.id','=','views.anime_id')->whereRaw('YEARWEEK(dtanime)=YEARWEEK(NOW())')->groupBy('views.anime_id')->get(['animes.img','animes.slug','animes.title']);
        $mensal = View::join('animes','animes.id','=','views.anime_id')->whereRaw('MONTH(dtanime)=MONTH(NOW())')->groupBy('views.anime_id')->get(['animes.img','animes.slug','animes.title']);
        $animes_por_categoria = View::join('animes','animes.id','=','views.anime_id')->selectRaw('animes.id, animes.title,animes.img,animes.slug, COUNT(views.id) as views')->where('animes.category_id',$now[0]->id)->groupBy('animes.id')->take(10)->orderBy('id', 'DESC')->get();
        return view('categoria.categoria')->with(['categorias'=>$categorias,'mais_vistos'=>['diario'=>$diario,'semanal'=>$semanal,'mensal'=>$mensal],'categoria'=>$now,'animes'=>$animes_por_categoria]);
    }

    public function comentar(Request $request,$slug)
    {
       $user_id = Auth::user()->id;
       $anime = Anime::where('slug',$slug)->get(['id']);
       $comentario = new Comment();
       $comentario->anime_id = $anime[0]->id;
       $comentario->comment = $request->comentario;
       $comentario->user_id = $user_id;

        try {
            $comentario->save();
            return back(201);
        }catch (\Exception $e){
           abort(500);
        }

    }



}
