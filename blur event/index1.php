<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#p1").blur(function () {
            var ch = $("#p1").val();

            $.post("x.php", { name: ch }, function (data) {
                if (data == "1")
                    $("#w").text("no");
                else
                    $("#w").text("yes");

            });
        });


    });
</script>
</head>
<body style="position:absolute;top:100px;left:100px;">

<input type="text" id="p1">
<p id="w"></p>
<input type="text" id="p2">

</body>
</html>