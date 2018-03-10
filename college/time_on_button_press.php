<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#mybutton").click(function(){
        $("#divTestArea1").load("time.php");
    });
});
</script>
</head>
<body>

<button id="mybutton">Get the time in seconds since 1/1/1970!!!</button>
<div id="divTestArea1"></div>
</body>
</html>