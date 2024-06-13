<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Musicas;

class PlayerController extends Controller
{

    public function listar(){

        $lista = array();
        $lista["musicas"][0] = [
            "id" => 0,
            "title" => "I Wanna be yours",
            "artist" => "arctic monkeys",
            "imageUrl" => "https://github.com/JaquelineIngridy/play-music/blob/main/Projeto/imagens/arctic%20monkeys.jpeg",
            "audioUrl" => "https://github.com/JaquelineIngridy/play-music/blob/main/Projeto/musicas/Arctic%20monkeys%20-%20I%20wanna%20be%20yours.mp3"
        ];

        return response()->json($lista);
    }

    public function salvarMusica(Request $request){
        $title = $request->input('title');
        $artist = $request->input('artist');
        $imageUrl = $request->input('imageUrl');
        $audioUrl = $request->input('audioUrl');

        $musica = new Musicas();
        $musica->title = $title;
        $musica->artist = $artist;
        $musica->imageUrl = $imageUrl;
        $musica->audioUrl = $audioUrl;
        $musica->save();

        return response()->json($musica,201);

    }

    public function buscar($id){
        $musica = Musicas::find($id);

        if(!$musica){
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }

        return response()->json($musica);
    }

    public function atualizar(Request $request,$id)
    {
        $title = $request->input('title');
        $artist = $request->input('artist');
        $imageUrl = $request->input('imageUrl');
        $audioUrl = $request->input('audioUrl');

        $musica = Musicas::find($id);

        if(!$musica){
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }

        $musica->title = $title;
        $musica->artist = $artist;
        $musica->imageUrl = $imageUrl;
        $musica->audioUrl = $audioUrl;
        $musica->save();

        return response()->json($musica);

    }

    public function deletar($id){
        $musica = Musicas::find($id);

        if(!$musica){
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }

        $musica->delete();

        return response()->json(['sucesso' => 'Registro deletado com sucesso'], 200);
    }





     public function index(){

        $lista = Musicas::all();

         if(count($lista) <= 0){
             $lista = new Musicas();
             $lista->title = "I Want You Back";
             $lista->artist = "jakson fives";
             $lista->imageUrl = "https://raw.githubusercontent.com/sbezerrarafa/encontro-com-feras/main/assets/jackson-fives.jpeg";
             $lista->audioUrl = "https://github.com/sbezerrarafa/encontro-com-feras/raw/main/assets/jackson-fives.mp3";
             $lista->save();

             $lista = new Musicas();
             $lista->title = "Pra onde eu irei?";
             $lista->artist = "Morada";
             $lista->imageUrl = "https://raw.githubusercontent.com/sbezerrarafa/encontro-com-feras/main/assets/morada.png";
             $lista->audioUrl = "https://github.com/sbezerrarafa/encontro-com-feras/raw/main/assets/Pra-onde-eu-irei.mp3";
             $lista->save();

            }

        //Buscar todos
        // $lista = Musicas::all();

        //Bucar por id
        // $lista = Musicas::find(2);

        //Deletar por id
        //Antes de deletar, verificar se existe
        // if($lista){
        //     $lista->delete();
        // }

        //Atualizar por id
    //     $lista = Musicas::find(2);

    //     if(!$lista){
    //         return response()->json(['error' => 'Registro não encontrado'], 404);
    //     }

    //     $lista->title = "mudando o titulo da musica";
    //     $lista->save();


    //     //Buscar todos
    //     $lista = Musicas::all();

         return response()->json($lista);

     }
}
