var fb = {
    
    meGusta : function(id) {
         $.ajax({
                url: baseUrl + '/publicacion/megusta', //Hay que Hacerlo así
                //url: '/sebas/public/publicacion/megusta',
                type: 'POST',
                async: true,
                data: {
                    publicacion : id
                },
                success: function(response){
-               //console.log(response);
+               //console.log(response);
+               $("#n-me-gusta-"+id).text(response.nlikes);
+               $("#t-me-gusta-"+id).text(response.type==-1?"Me gusta" : "Ya no me gusta");
                }
            });              
    },
    
    
    
    comentar: function (id) {
        var comentario = $("#comentario-" + id);
        if (comentario.val() != "") {
            $.ajax({
                url: baseUrl + '/publicacion/comentar',
                type: 'POST',
                async: true,
                data: {
                    publicacion: id,
                    comentario: comentario.val(),
                },
                success: function (response) {
                    //console.log(response);
                   var div = "<div style='margin-bottom: 1px; font-size: 10px; padding: 3px;' class='well well-sm col-sm-7'><img src='"+baseUrl +"/assets/img/profile/"+ response.id_usuario +".jpg' width='15' height='15'>"+ response.publicacion +"</div>";
                    $("#comentarios-"+id).append(div);
                    comentario.val(""); 
                }
            });
        } else {
            alert('Este campo es obligatorio');
        }
    }
};

