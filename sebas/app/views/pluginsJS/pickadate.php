<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <link rel="stylesheet" href="./libs/pickadate/lib/compressed/themes/default.css">
        <link rel="stylesheet" href="./libs/pickadate/lib/compressed/themes/default.date.css">
        <link rel="stylesheet" href="./libs/pickadate/lib/compressed/themes/default.time.css">
    
    </head>
    <body>
        <input class="datepicker" id="day" type="text" readonly>
        <input class="timepicker" id="time" type="text" readonly>
        <script src="./libs/pickadate/lib/picker.js"></script>
        <script src="./libs/pickadate/lib/picker.date.js"></script>
        <script src="./libs/pickadate/lib/picker.time.js"></script>
        <script src="./libs/pickadate/lib/legacy.js"></script>
        <script type="text/javascript">
           $('.datepicker').pickadate();          
        </script>
        
        <script type="text/javascript">
           $('.timepicker').pickatime();          
        </script>
        
    </body>
</html>
