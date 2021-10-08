<!DOCTYPE html>
<html>
<head>
<title>CourseLodge | Login</title>
<link rel="stylesheet" href="../css/login.css">
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }

        </script>
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;">CourseLodge | <span style="color:green">Login</span></h1>  
</div>
</div>

<div id="content">
    <form name="Myform" id="Myform" action="loginProcess.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left:1em; border-spacing: 0.5rem">
        
        <tbody>
            <tr>
                <td style="text-align: right; font-size: 20px">Username</td>
                <td style="font-size: 20px"><input type="text" name="uname" id="fname" onkeydown="HideError()" size="20px;"/></td>
            </tr>
            <tr>
                <td style="text-align: right; font-size: 20px">Password</td>
                <td style="font-size: 20px"><input type="password" name="password" id="password" onkeydown="HideError()" size="20px;"/></td>
            </tr>
            
            <tr>
                <td style="color:#F8F8FF;"></td>
                <td><input type="submit" name="submit" value="Login" /></td>
            </tr>

            <tr>
                <td style="color:#F8F8FF;"></td>
                <td style="color:green;"><a href="#" onclick="getPage('./User/Registration.php')"><i>Register</i></a></td>
            </tr>


            <tr>
                <td style="color:#F8F8FF;"></td>
                <td style="color:green;"><a href="#" onclick="getPage('forgetPassword.php')"><i>forgot your password..!</i></a></td>
            </tr>
        
        </tbody>
    </table>
</form>

</div>

<div class= "clear"></div>

<div id="footer">
<center>&copy;Akindipe B.A 2021 </center>
</div>
</div>
</body>
</html>
