<?php
    session_start();
    if(isset($_POST['close']))
    {
        header( "refresh:0;url=".$_SESSION['exo'] );
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Page1</title>
</head>
<body>
  <h1>Page 1</h1>
      <fieldset>
          <legend align="center">Stage</legend>
      		<form method="post" action='page2.php'>
                  <?php
                          if (isset($_POST['start']))
                                  {
                                          echo "<p>
                                              <table>
                                                 <tr>
                                                     <th>Name</th>
                                                     <td height='50'><input type='text' name='save_name' />
                                                     </td>
                                                 </tr>
                                                 <tr>
                                                     <th>Address</th>
                                                     <td height='50'><input type='text' name='save_address'/>
                                                     </td>
                                                 </tr>
                                                  <tr>
                                                     <td height='30' colspan='2'>
                                                          <input type='submit' name='next1' value='Next stage'/>
                                                          <input type='submit' name='close' value='Cancel'/>
                                                     </td>
                                                 </tr>
                                              </table>
                                              </p>";
                                      }

                  ?>
              </form>
      </fieldset>
    
</body>
</html>