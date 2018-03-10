<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><script type="text/javascript">
$(document).ready(
    function(){
        $("#divTestArea1").load("time.php");
        setInterval(function(){
            $("#divTestArea1").load("time.php");
        }, 1000);
    });
</script>
</head>
<body>
<div id="divTestArea1"></div>
</body>
</html>