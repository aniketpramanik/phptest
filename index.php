<html>
<head>
    <title>Send HTTP Get Request using PHP</title>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
        <script>
            function submit_soap(){
                var ip=$("#ip_address").val();
                $.get("form_get.php",{ip:ip},
                function(data){
                    $("#json_response").html(data);
                });
            }
            </script>
</head>
<body>
    <center>
        <h3>Send HTTP GET Request using PHP </h3>
            <form>
             IP Address : <input name="ip_address" id= "ip_address" type="text"><br/>

            <input type = "button" value="Submit" onclick="submit_soap()" />
            </form>

            <br>--------
            
    </center>
    <div id="json_response"></div>
</body>
</html>