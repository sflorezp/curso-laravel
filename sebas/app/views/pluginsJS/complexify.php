<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="./libs/complexify/jquery.complexify.js "></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script>
                    $(function () {
                    $("#password").complexify({miniumChars: 10}, function (valid, complexity) {
                    if (complexity < 43) {
                    $("#complexity").html(Math.round(complexity) + "%");
                            $("#complexity-bar").removeClass("progress-bar-success");
                            $("#complexity-bar").addClass("progress-bar-danger");
                            $("#complexity-bar").css({
                    'width': complexity * 5
                    });
                    }
                    else {
                    $("#complexity").html(Math.round(complexity) + "%");
                            $("#complexity-bar").removeClass("progress-bar-danger");
                            $("#complexity-bar").addClass("progress-bar-success");
                            $("#complexity-bar").css({
                    'width': complexity * 5
                    });
                    }
                    });
                    });
        </script>
        <style>
            #password {
                width: 500px;
            }
            h1 {
                font-weight: 500px;
                line-height: 1.1;
                color: inherit;
            }
            .progress {
                height: 15px;
                width: 500px;
                margin-bottom: 20px;
                overflow: hidden;
                overflow-x: hidden;
                overflow-y: hidden;
                background-color: #f5f5f5;
                border-radius: 4px;
                box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
            }
        </style>
    </head>
    <body>
        <div class="row"> 
            <div class="col-md-5 col-sm-11"></div> 
            <div class="col-md-5 col-sm-11">  
                <div id="complexify">  
                    <div class="form">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                    </div>
                    <div class="progress">
                        <div id="complexity-bar" class="progress-bar" ></div>
                    </div>
                    <p></p>
                    <h1 id="complexity" >0%</h1>
                    <p></p>
                </div> 
            </div>    
        </div>       
    </body>
</html>
