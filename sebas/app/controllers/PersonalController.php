<?php
class PersonalController extends BaseController{
    
    public function getRegistrar($tipo, $nombre){
        echo "Hola {$nombre} eres una {$tipo}";
    }
     public function getRegistrar2($tipo){
         if($tipo=="medico"){
             return View::make('registro.medico');
         }
         else if($tipo=="enfermera"){
             return View::make('registro.enfermera');
         }
          else if($tipo=="paciente"){
             return View::make('registro.paciente');
         }
         else 
             echo "Error";
    }   
    
}

    
   
    
    



