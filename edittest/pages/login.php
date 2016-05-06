<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>CPE55</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>
<form name="form1" method="post" action="check_login.php">
    <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="<?php echo "image/rmuttl.png"; ?>" alt="Avatar" /> 
    </button>
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
          <input type="text" id="username" placeholder="Username" class="input" name="username" required pattern=.*\S.* />
          
        </div>
        <div class="field">
          <input type="password" placeholder="Password" id="password" class="input" name="password" required pattern=.*\S.* />
          
        </div>
        <div class="profile__footer">
          <button class="btn" type="submit">Login</button>
         </form>
        </div>
      </div>
     </div>
  </div>
</div>
    
        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
