<?php
class ProfileController extends BaseController {

    public function getIndex() {
                $publicaciones = Usuario::find(Auth::user()->id)->misPublicaciones();
                $amigos = Usuario::all();
                $friends = "";
                foreach ($amigos as $amigo) {
                    $friends.= "\"{$amigo->nombre}\","; /* .= es como el += */
                }
                $friends = trim($friends, ",");
                /* var_dump($s); es como print_r() */
                $usuario = Usuario::find(Auth::user()->id);
                $listOfFriends=Usuario::find(Auth::user()->id)->misAmigos();

                return View::make('perfil.perfil')
                                ->with("nombre", Auth::user()->nombre)
                                ->with("publicaciones", $publicaciones)
                                ->with("friends", $friends)
                                ->with("foto", Auth::user()->id.".jpg")
                                ->with("amigos", $listOfFriends)
                                ->with("usuario", $usuario);          
    }

    public function getVer($id) {  
        if($id==Auth::user()->id) return Redirect::to("/profile");   
        else {
            $usuario = Usuario::find($id);
            $listOfFriends=Usuario::find(Auth::user()->id)->misAmigos();
            if($usuario) {
                $publicaciones = $usuario->misPublicaciones();
                return View::make('perfil.perfil')
                    ->with("nombre", $usuario->nombre)
                    ->with("foto", $usuario->id.".jpg")
                    ->with("correo", $usuario->correo)
                    ->with("publicaciones", $publicaciones) 
                    ->with("amigos", $listOfFriends)
                    ->with("usuario", $usuario);
            }else{
                return Redirect::to("/profile");
            }
        }
    }
   
    public function getLogout() {
         Auth::logout();
         return Redirect::to("/");
    }
}
?>