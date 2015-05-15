<html>
    <head>
        <title>Facebook</title>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
        {HTML::script('/libs/typeahead/typeahead.min.js')}
         <script>
            var baseUrl = '{url('/')}'; 
        </script>
        {HTML::script('assets/js/app2.js')}       
    </head>    
    <body>
        {*Hola {$nom}, tu edad es {$edad}
        {capture assign="var"}
            Hola
            Esta es una Prueba
            de capture.
        {/capture}
        {include file="./test.tpl"}
        {$var}
        {*<div class="container">
             {capture assign="layouts"}../layouts/{$layout}.tpl{/capture}
             {include file=$layouts}
        </div>*}
        <div class="container">
             {include file="../layouts/{$layout}.tpl"}
        </div>
    </body>
</html>