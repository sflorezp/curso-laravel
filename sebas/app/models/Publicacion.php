<?php

class Publicacion extends Eloquent {
    protected $table = 'publicacion'; /*Se reescribe la variable de Eloquent*/  
    
    public function freshTimestamp() {
        return date('Y-m-d h:i:s');
    }
    
       
}

