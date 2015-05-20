<?php

class Publicacion extends Eloquent {
    protected $table = 'publicacion'; /*Se reescribe la variable de Eloquent*/  
    
    public function freshTimestamp() {
        return date('Y-m-d h:i:s');
    } 
    
    public static function likes($id) {
        return Megusta::where('id_pub', $id)
                ->count();
    }
    
    public function leGustaA($usuario){    
        return Megusta::where('id_pub', $this->id)
            ->where('id_usuario', $usuario)
            ->count() > 0? 'Ya no me gusta' : 'Me gusta';
    }
  
    public function comentarios() {
      return Publicacion::where('padre', $this->id)
              ->where('tipo', 1)
              ->get();
  }
}

?>