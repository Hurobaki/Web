<?php
    session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Exercice 3</title> 
        <style>
            fieldset
            {
                width: 30%;
            }
            table
            {
                border-collapse: collapse;
                width: 500px;
            }
            td, th
            {
                border: 1px solid black;
                
            }
            td
            {
                text-align:center;
            }

        </style>
	</head>
<body>
<fieldset>
    <legend>Login</legend>
        <form method="post" action="exercise3(alone).php">
            <table>
               <tr>
                   <th>Login</th>
                   <td height="50"><input type="text" name="login"/></td>
               </tr>
               <tr>
                   <th>Password</th>
                   <td height="50"><input type="password" name="password"/></td>
               </tr>
                <tr>
                   <td height="25" colspan="2"><input type="submit" name="logon"/></td>
               </tr>
                <tr>
                   <td height="25" colspan="2">Here's the way to logout : <input type="submit" name="logout" value ="Logout"/></td>
               </tr>
            </table>
        </form>
</fieldset>
</body>
</html>