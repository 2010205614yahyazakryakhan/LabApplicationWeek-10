<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Registration From</title>
</head>
<style>
    form{
        font-family: Calibri;
        color:black;
        font-size: 11pt;
        font-style: normal;
        font-weight: bold;
        text-align:;
        background-color: powderblue;
        border-collapse: collapse;
        border: 2px solid navy
    }
    form.inner{
        border: 0px
    }
    .Form1{
        border: 1px solid black;
        margin-top: 200px;
        margin-bottom: 500px;
        margin-right: 500px;
        margin-left: 500px;
        background-color: white;
    }
</style>
<body style="text-align: center">
    <div class = "Form1" style="text-align: center">
<form action="Dbconnection.php" method="post" target="_blank">
    <!--Fullname--> <br><br>
    <label>Full_Name :</label>
    <input type="text" name="full_name" placeholder="Full_name" required><br><br>

    <!--Email-->
    <label>Email :</label>
    <input type="email" name="email" placeholder="Your email" required><br><br>

    <!--Gender-->
    <label>Gender:</label>
    <input type="radio" name="gender" value="Male" required>Male
    <input type="radio" name="gender" value="Female" required>Female<br><br>
    <input type="submit" value="Submit"> <br> <br>
</form>
    </div>
</body>
</html>
