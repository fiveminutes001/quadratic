<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body style="text-align:center;">
<button type="button">Click Me</button>
<div></div>
<script type="text/javascript">
    $(document).ready(function(){
        $("button").click(function(){
            $.ajax({
                type: 'POST',
                url: 'ajax_call.php',
                success: function(data) {
                   $("div").html(data);
                }
            });
   });
});
</script>
</body>
</html>