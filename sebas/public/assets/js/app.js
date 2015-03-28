
/*function menor_edad() {
    edad = prompt("Ingrese su Edad");
    if(edad<18) {
        alert("No puede entrar");
        
    }
    
}*/

/*name = prompt("Ingrese su Nombre");
alert("usted se llama" + name);

edad = prompt("Ingrese su Edad");
if(edad>18){
  location.href="http://www.google.com";
} else {
    while(edad<18) {
      edad = prompt("Ingrese su Edad");      
    } 
    location.href="http://www.google.com";  
} */

/*var persona = {
    nombre: "Sebas",
    apellido: "Flórez",
    lugar_de_nacimiento: "Medellín",
    interes: ['programación', 'futbol']
};
alert(persona.nombre);*/

var managerScreen = managerScreen || {}; /*Voy a Crear una referencia de un objeto y en caso de que no exista hacer esas funciones*/
managerScreen = {
    cambiarColorFondo : function(color) {
        document.body.style.background = color;
        $("body").css('background',color);
    },  
    saludar : function() {
         alertify.alert("Hola");
    },
    ocultarParrafoConId : function() {
        document.getElementById('1').style.display = 'none';    
    },
    ocultarTodos : function() {
       var ps = document.getElementsByTagName("p");
        for ( i = 0; i < ps.length; i++) {
           ps[i].style.display='none';            
        }
    },
    mostrarParrafos: function() {
        var ps = document.getElementsByTagName("p");
        for ( i = 0; i < ps.length; i++) {
           ps[i].style.display='block';            
        }        
    },

      /*ocultarTodosElementos: function(tag) {
        var ps = document.getElementsByTagName(tag);
        for ( i = 0; i < ps.length; i++) {
           ps[i].style.display='none';            
        }        
    }*/
    ocultarTodosElementos: function(tag) {
        $("p").hide();
    },
    desvanecer: function() {
        $("p").fadeToggle(2000);
    },
    alertify: function() {
        alertify.log("Notification", "Success", 10000);
        alertify.log("Error", "Error", 900);
        alertify.log("Notification", "Success", 5000);
    }
}

var ms = managerScreen;



    

    



