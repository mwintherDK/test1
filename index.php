<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
     <div class="container">
       <img src="img/cat-banner.jpg" alt="Kat" class="img-responsive row">
       <nav class="row">
            <ul>
             <li><img src="img/icon.svg" alt="Cat icon" width="30"></li>
             <li><a href="#" class="active">Forside</a></li>                      
             <li><a href="#" id="logIn">Log ind</a></li>
             <li><a href="#">Kontakt</a></li>
           </ul>
       </nav>
       <div class="row">
         <main class="col-md-9">   
          <!-- Artikel her! -->
         </main>  
          <aside class="col-md-3">
           

            <div class="loginBox col-md-12">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h4>Log ind</h4>
                </div>                         
                <div class="panel-body">
                  <form action="checkLogin.php" method="get">
                    <div class="form-group">
                      <label for="user">Brugernavn:</label>
                      <input type="text" class="form-control" id="user" placeholder="Brugernavn" name="formUser">
                    </div>
                    <div class="form-group">
                      <label for="pass">Password:</label>
                      <input type="password" class="form-control" id="pass" placeholder="Password" name="formPass">
                    </div>
                    <input type="submit" class="btn btn-default text-center col-md-12" value="Log ind">
                  </form>                 
                </div>
              </div>
            </div>
           
            <div class="col-md-12">
              <h2>Om mig og kattene</h2>                     
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h4>Hvem er vi?</h4>
                </div>                         
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur,
       harum, exercitationem odio non praesentium ipsa officia fuga libero aut
       distinctio alias, quidem neque! Nam eveniet adipisci necessitatibus quos
       pariatur, alias.</p>
                </div>
              </div>
            </div>
          </div>               
        </aside>  
        <footer>
          <div class="row">
            <hr>
           <div class="col-lg-12">
            <div class="col-md-8">
              <a href="#">Link til katte.com</a> | <a href="#">Andet</a>    
            </div>
            <div class="col-md-4">
              <p class="muted pull-right">© 2016 Mark F. Winther</p>
            </div>
          </div>
          </div>
        </footer>          
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>