

<html>
<head>
<title>
    Sign up for a membership @ Ay 7aga.com
</title>
<script type="text/javascript">
function check(){
var x = "";
if(document.getElementById('user').value =="")
    x+="Enter user name -";
if(document.getElementById('password').value =="")
    x+="Enter password";
document.getElementById('error1').innerHTML = x;

}
</script>
</head>
<body>
<div name="error" id="error" style="width:1200px;background-color:red"> 
<p name="error1" id="error1"> 
</div>
<center>
<br/>
<form name="register" id="register" >
    <table>
        <tr>
        <td> UserName </td>
            <td> <input type="text" id="user" /> </td>
        </tr>
        <tr>
            <td> Password </td>
            <td> <input type="password" name="password" id="password"/></td>
        </tr>

    </table>
    <button onclick="check()" type="button"> Submit </button>
</form>
<a href="Home page.html"> Go to Home page </a>
</center>
</body>
</html>