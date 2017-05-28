<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Reseau social pour sportifs">
<meta name="author" content="SOSPARTNERS">
<link rel="stylesheet" type="text/css" href="../M2L/css/theme.css">

<title>Pole emploi & formation - M2L &#9917;</title>

<!-- Bootstrap core CSS -->

<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/readable/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/main.css"/>


<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Pole Emploi M2L</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Accueil</a></li>
          <li><a href="login.php">Connexion</a></li>
          <li><a href="register.php">Inscription</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>


<div class="main-content">
<div class="container">
<h1 class="lead">connexion</h1>


<form data-parsley-validate method="post"  class="well col-md-6" action="login.php">
   <!-- Identifient field -->
  <div class="form-group">
     <label class="control-label" for="identifiant">Identifiant</label>
     <input type="text" value="" class="form-control" id="identifiant" name="nom" required="required"/>
  </div>


   <!-- Password field -->
  <div class="form-group">
     <label class="control-label" for="password">Mot de passe:</label>
     <input type="password" class="form-control" id="password" name="mdp" required="required"/>
  </div>

 <!-- Remember me field -->
<div class="form-group">
   <label class="control-label" for="remember_me">
      <input type="checkbox" name="remember_me" id="remember_me" />
      se souvenir de moi
   </label>

</div>

  <input type="submit" class="btn btn-primary" value="Connexion" name="login" />


</form>
</div><!-- /.container -->
</div>



<!-- scripte -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="libraries/parsley/parsley.min.js"></script>

<script src="libraries/parsley/i18n/fr.js"></script>
<script type="text/javascript">
window.ParsleyValidator.setlocale('fr');
</script>

</body>
</html>
