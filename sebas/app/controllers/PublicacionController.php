<?php

class PublicacionController extends BaseController {
    
    public function postCrear() {
        $publicacion = [
            'publicacion' => Input::get('publicacion'),
            'tipo' => 0,
            'id_usuario' => Auth::user()->id,
            'receptor' => Input::get('receptor')
        ];
        DB::table('publicacion')->insert($publicacion); 
        if(Input::get('receptor') == Auth::user()->id){   //Preguntarle a Pineda si está es la forma adecuada de quedarse en la página
            return Redirect::to("/profile");
        }    
        else{ 
            return Redirect::to("/profile/ver/".Input::get('receptor'));
        }          
    }
    
    public function postComentar() {
    }
    public function getEliminar($id) {
        $publicacion = Publicacion::find($id);
        /*var_dump($publicacion); es como print_r()
        EXIT;*/
        if($publicacion && $publicacion->id_usuario == Auth::user()->id) {
                $publicacion->delete();        
        }
        return Redirect::to("/profile");
    }  
    
    public function postMegusta() {
        $megusta = [
            'id_pub' => Input::get('publicacion'),
            'id_usuario' => Auth::user()->id
        ];
        DB::table('me_gusta')->insert($megusta);
        $data['nlikes'] = Publicacion::likes(Input::get('publicacion'));        
        return Response::json($data);
    }
}
?>
