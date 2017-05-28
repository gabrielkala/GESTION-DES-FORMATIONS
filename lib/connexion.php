 <?php
include(dirname(__FILE__)."/../dal/dbUtilisateur.php");

/**
*La fonction suivante permet de démarrer une session
*@return void
*/

function DemarrerSession()
{
  if (session_status() == PHP_SESSION_NONE)
  {
    session_start();
  }
}

/**
*La fonction teste si l'utilisateur est bien identifié
*@return void
*/

function EstConnecte()
{
  DemarrerSession();
  if (!isset($_SESSION['id']))
  {
    header('Location: login.php');
    exit;
  }
}

/**
* La fonction teste si l'utilisateur a rentré les bon identifiants dans le formulaire de connection
*@return vrai si l'utilisateur a rentré les bon identifiants
*/

function TestIdentifiants()
{
  $resultat = false;
  if (!empty($_POST['nom'] && !empty($_POST)))
  {
    $employe = RchercheUtilisateur($_POST['nom'],$_POST['mdp']);

    if (!empty($employe))
    {
      DemarrerSession();

      $_SESSION['id'] = $empoye['idEmploye'];
      $_SESSION['nom'] = $employe['nom'];

      $resultat = true;
    }
    return $resultat;
  }
}

/** La fonction obtient le nom stocké dans la session
*@return le nom s'il est connu, ou inconnu si le nom n'est pas connu
*/

function ObtenirNonEnCours()
  {
   return isset($_SESSION['nom'])? $SESSION['nom'] : 'Inconnu';

  }

  /**
   *  La fonction obtient l'id  de l'utilisateur stocké dans la session
   * @return l'id
   */
  function ObtenirIdEnCours()
  {
  	return $_SESSION['id'];

  }
  /**
   * Déconnexion d'une session
   * @return void
   */
  function Deconnexion()
  {
  	session_destroy();

  }
