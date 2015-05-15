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
}

?>