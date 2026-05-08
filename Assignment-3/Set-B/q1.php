<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form onsubmit="return validate()">
        <input type="text" placeholder="Username" id="t1"><br><br>
        <input type="text" placeholder="Password" id="t2"><br><br>
        <input type="submit" value="Submit">

    </form>
</body>

</html>

<script>
    function validate() 
    {
        let username = document.getElementById("t1").value;
        let password = document.getElementById("t2").value;

        let userreg = /^[a-zA-Z0-9]{4,}$/;
        let passreg = /^[a-z0-9]{6}$/;

        if(!userreg.test(username))
        {
            window.alert("Invalid username");
            return false;
        }
        if(!passreg.test(password))
        {
            window.alert("Invalid password");
            return false;
        }
        window.alert("Login successful");
        return true;
    }
</script>