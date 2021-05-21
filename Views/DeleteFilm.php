<?PHP
include "../Core/FilmCore.php";
$FilmController=new FilmCore();
/* if (isset($_POST["id"])){ */
	$FilmController->supprimerFilm($_POST["id"]);
	
/* } */

?>