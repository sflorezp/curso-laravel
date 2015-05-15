var fb = {
    
    meGusta : function(id) {
         $.ajax({
                //url: baseUrl + '/publicacion/megusta', Esto también funciona, baseUrl esta definida en el template
                url: '/sebas/public/publicacion/megusta',
                type: 'POST',
                async: true,
                data: {
                    publicacion : id
                },
                success: function (response) {
                    console.log(response)
                    //$('#countMegusta').load('/sebas/public/profile/ver/' + id);
                }
            });              
    },
    
    
    comentar: function (id) {
        var comentario = $("#comentario-" + id);
        if (comentario.val() != "") {
            $.ajax({
                url: 'publicacion/comentar',
                type: 'POST',
                async: true,
                data: {
                    usuario: 1,
                    comentario: comentario.val(),
                },
                success: function (response) {
                    alert('Se ejecutó correctamente');
                }
            });
        } else {
            alert('Este campo es obligatorio');
        }
    }
};

