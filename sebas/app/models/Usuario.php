<?php

class Usuario extends Eloquent {
    protected $table = 'usuario'; /*Se reescribe la variable de Eloquent*/  

    public function misPublicaciones() {
        return Publicacion::where('receptor', $this->id)
                ->where('tipo', 0)
                ->orderBy('id', 'desc')
                ->get();
    }  

    public function misAmigos() {
        return Usuario::where('id','<>', $this->id)->get();
    }
    
    public function leGustaPublicacion($publicacion) {
      return Megusta::where('id_usuario', $this->id)     
              ->where('id_pub', $publicacion)
              ->count()>0;
    }
    
    public function yaNoLeGustaPublicacion($publicacion){
    Megusta::where('id_usuario',$this->id)
            ->where('id_pub', $publicacion)
            ->delete();
  
}

}

?>