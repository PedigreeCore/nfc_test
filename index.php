<?php 
echo 'PHP Line Test.<br>';
?>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>NFC Test</title>
    </head>
    <body>
        <span id="nfcContent"></span>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            console.clear();
            if('NDEFReader' in window){
                $('#nfcContent').html('NFC Reader Defined.');
            } else {
                $('#nfcContent').html('NFC Reader Not Found.');
            }
        });
    </script>
</html>