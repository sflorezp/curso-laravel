<?php

class Usuario extends Eloquent {
    protected $table = 'usuario'; /*Se reescribe la variable de Eloquent*/  

    public function misPublicaciones() {
        return Publicacion::where('receptor', $this->id)
                ->orderBy('id', 'desc')
                ->get();
    }   


    public function misAmigos() {
        return Usuario::where('id','<>', $this->id)->get();
    }
}    

?>