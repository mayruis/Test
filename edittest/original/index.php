  <?php 
   
    include('dbconnect.php'); 
?>


<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>

<body>

 		<div class="container">
       
        </div>   
        	<div class="row">
    			<div class="span8">Main</div>
    			<div class="span4">Sidebar</div>
			</div>
            
</body>
        
    <h1 >Arduino Temperature Log</h1>      
   
  			
<form name="form1" method="post" action="check_login.php">  
      <h1>Login</h1>
  <table border="1" style="width: 300px" align="center">
    <tbody>
      <tr>
        <td> &nbsp;Username</td>
        <td>
          <input name="txtUsername" type="text" id="txtUsername">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
      
      <tr>
    
        <td align="right"> <input type="submit" name="Submit" value="Login" ></td>
      </tr>
      
    </tbody>
  </table>
</form>
   
</html>
