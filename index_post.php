<html>
<head>
    <title>Send HTTP POST Request using PHP</title>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
        <script>
            function submit_soap(){
                var name=$("#name").val();
                var email=$("#email").val();
                var url=$("#url").val();
                $.post("form_post.php",{name:name,email:email,url:url},
                function(data){
                    $("#json_response").html(data);
                });
            }
            </script>
</head>
<body>
    <center>
        <h3>Send HTTP POST Request using PHP </h3>
            <form>
             name : <input name="name" id= "name" type="text"><br/>
             email: <input name="email" id= "email" type="text"><br/>
             url  : <input name="url" id= "url" type="text"><br/>

            <input type = "button" value="Submit" onclick="submit_soap()" />
            </form>

            <br>--------
            <div id="json_response"></div>
    </center>
</body>
</html>