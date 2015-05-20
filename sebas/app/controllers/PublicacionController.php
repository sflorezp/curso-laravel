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
    
            return Redirect::to("/profile/ver/" . Input::get('receptor'));
        
    }

    public function postComentar() {
        if(Request::ajax()) {
            $publicacion = Publicacion::find(Input::get('publicacion'));
            $comentario = [
                'publicacion' => Input::get('comentario'),
                'tipo' => 1,
                'id_usuario' => Auth::user()->id,
                'receptor' => $publicacion->receptor,
                'padre' => $publicacion->id
                
            ];
        }
        DB::table('publicacion')->insert($comentario);
        
        return Response::json($comentario);
    }

    public function getEliminar($id) {
        $publicacion = Publicacion::find($id);
        /* var_dump($publicacion); es como print_r()
          EXIT; */
        if ($publicacion && $publicacion->id_usuario == Auth::user()->id) {
            $publicacion->delete();
        }
        return Redirect::to("/profile");
    }

    public function postMegusta() {

        $publicacion = Input::get('publicacion');
        $usuario = Usuario::find(Auth::user()->id);

        if ($usuario->leGustaPublicacion($publicacion)) {
            $usuario->yaNoLeGustaPublicacion($publicacion);
            $data['type'] = -1;
        } else {
            $megusta = [
                'id_pub' => Input::get('publicacion'),
                'id_usuario' => Auth::user()->id
            ];
            DB::table('me_gusta')->insert($megusta);
            $data['type'] = 1;
        }

        $data['nlikes'] = Publicacion::likes(Input::get('publicacion'));
        return Response::json($data);
    }
    
}

?>
