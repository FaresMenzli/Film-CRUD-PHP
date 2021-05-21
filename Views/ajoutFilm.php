<?PHP
include "../Entities/Film.php";
include "../Core/FilmCore.php";
//include "../config.php";

if (isset($_POST['Email'])
 and isset($_POST['DateNaiss']) 
 and isset($_POST['Sexe']) 
 and isset($_POST['FilmTiltle'])
 and isset($_POST['DateFilm'])
 and isset($_POST['UrlFilm'])
 and isset($_POST['DescriptionFilm'])
 and isset($_POST['NoteFilm'])){
$Film1=new Film($_POST['Email'],$_POST['DateNaiss'],$_POST['Sexe'],$_POST['FilmTiltle'],$_POST['DateFilm'],$_POST['UrlFilm'],$_POST['DescriptionFilm'],$_POST['NoteFilm']);
//var_dump($Film1);
$Film1Controller=new FilmCore();
$Film1Controller->ajouterFilm($Film1);
header('Location: Films.php');

	
}else{
	echo "vérifier les champs";
}

?>