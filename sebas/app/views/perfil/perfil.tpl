{capture assign="left"}
    {Auth::check()}
    <center>
        <img src="https://scontent.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10923385_10204790305291971_7441852221582200492_n.jpg?oh=dcc2c8363ef95e902a3a978fb7f573e2&oe=556FD058" width="150" height="150"</img>
    </center>
    <br>
    <div class="well">
        Information
    </div>     
{/capture}  

{capture assign="right"}
    {Form::open(['url'=>'/publicacion/crear'])}    
    <textarea required name="publicacion" placeholder="¿What do You Think?" rows="3" class="col-sm-12"></textarea> 
    <button type="submit" class="btn pull-right btn-success">Publicar</button>
    {Form::close()}
    <hr>
    <br>
    <br>
    <br>
    {foreach $publicaciones as $publicacion}        
        <div class="well" style="word-break: break-all; margin-bottom: 5px; padding: 10px 5px; font-family: 'Ubuntu', sans-serif;">
            <button class="close" aria_hidden="true" style="margin-top: -10px;"><a href="{url('publicacion/eliminar')}/{$publicacion->id}">&times;</a></button>
                {$publicacion->publicacion}
        </div>
        <div>
            <span class="glyphicon glyphicon-comment"></span><span>Comentar</span> |
            <span class="glyphicon glyphicon-thumbs-up"></span>Me gusta            
            <div id="comentarios-{$publicacion->id}">
                 <div style="font-size: 10px; padding: 3px;"class="well well-sm col-sm-7">Esto es un comentario</div>
            </div>    
            <br>
            <br>
            <textarea id="comentario-{$publicacion->id}" rows=1 placeholder="Escribe tu Comentario ... " class="col-sm-6"></textarea>
            <button class="btn btn-success btn-sm" onclick="fb.comentar({$publicacion->id})">Comentar</button>
        </div>  
        <hr>  
        {foreachelse}
            <div class="alert alert-danger">
                No Hay Publicaciones
            </div>
        {/foreach}   
{/capture} 

{capture assign="portada"}
    <img src="">
{/capture} 

{include file="../masterpage/template.tpl" layout="two_columns"}