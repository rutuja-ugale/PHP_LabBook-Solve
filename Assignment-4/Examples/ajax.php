<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function display()
        {
            var x= new XMLHttpRequest();
            var n = document.getElementById('n').value;
            x.open("GET","name.php?n="+n,true);
            x.send();
            x.onreadystatechange=function()
            {
                if(x.readyState==4 && x.status==200)
                {
                    document.getElementById('show').innerHTML=x.responseText;
                }
            }
        }
    </script>
</head>
<body>
    <br><br>
    Search Box: <input type="text" id="n" onkeyup="display()">
    <br><br>
    <div id="show"></div>
</body>
</html>