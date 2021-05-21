<HTML>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Modifier Film</title>
</head>
<body>
<header >
        <img src="Sans titre.png" alt="SATURN" height="50px">
       
        <p>Movie-House</p>

    </header>
	<main>
      
	<nav class="nav"><p > <a href="Index.html" >Acceuil</a></p><p><a href="Films.php">Liste des films</a> </p><p><a href="AjoutFilm.html">Ajouter un film</a></p></nav>
    <h2 class="center">Modifier Film</h2>
    <div class="modif">
    
<?PHP
include "../Entities/Film.php";
include "../Core/FilmCore.php";
if (isset($_GET['id'])){

$Film1Controller2=new FilmCore();

$result=$Film1Controller2->recupererFilm($_GET["id"]);
	foreach($result as $row){
		/* $id=$row['id']; */
        $Email=$row['Email']; 
        $DateNaiss=$row['DateNaiss'];
        $Sexe=$row['Sexe'];
		$FilmTiltle=$row['FilmTiltle'];
		$DateFilm=$row['DateFilm'];
		$UrlFilm=$row['UrlFilm'];
		$DescriptionFilm=$row['DescriptionFilm'];
		$NoteFilm=$row['NoteFilm'];
		
?>
<form method="POST">
<table >

<tr>
<td>Email</td>
<td><input type="text" name="Email" value="<?PHP echo $Email ?>"  ></td>
</tr><tr>
<td>DateNaiss</td>
<td><input type="date" name="DateNaiss" value="<?PHP echo $DateNaiss ?>" ></td>
</tr><tr>
<td>Sexe</td>
<td><input type="text" name="Sexe" value="<?PHP echo $Sexe ?>"  ></td>
</tr>
<tr>
<td>FilmTiltle</td>
<td><input type="text" name="FilmTiltle" value="<?PHP echo $FilmTiltle ?>"></td>
</tr>
<tr>
<td>DateFilm</td>
<td><input type="date" name="DateFilm" value="<?PHP echo $DateFilm ?>"></td>
</tr>
<tr>
<td>UrlFilm</td>
<td><input type="text" name="UrlFilm" value="<?PHP echo $UrlFilm ?>"></td>
</tr>
<tr>
<td>DescriptionFilm</td>
<td><input type="text" name="DescriptionFilm" value="<?PHP echo $DescriptionFilm ?>"></td>
</tr>
<tr>
<td>NoteFilm</td>
<td><input type="number" name="NoteFilm" value="<?PHP echo 
$NoteFilm ?>"></td>
</tr>
<tr>
<td></td>
<td class="button"><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
</div>
</main>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Film=new Film($_POST['Email'],$_POST['DateNaiss'],$_POST['Sexe'],$_POST['FilmTiltle'],$_POST['DateFilm'],$_POST['UrlFilm'],$_POST['DescriptionFilm'],$_POST['NoteFilm']);
    $Film1Controller3=new FilmCore();
	
    $Film1Controller3->modifierFilm($Film,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: Films.php'); 
}
?>
 <footer>
    </div>
    <h2 id="contactus">Contact Us</h2>
    <div class="footer-main">  
        
        <table class="table"  >
   <tr>
       <figure> 
           <td> </td>
           <td><img src="Logo/61045.svg" alt="githublogo" width="80" height="80">
            <figcaption> Facebook</figcaption></td> 
            <td> </td>
        
            <td> <img src="Logo/instagram-logo-A807AD378B-seeklogo.com.png" alt="linkedinlogo"width="70" height="80">
                <figcaption> Instagram</figcaption></td> 
           <td> </td>
       
           <td>  <img src="Logo/5ca98c73b2bb7a02bf8350933c7ca443.png" alt="codewarslogo"width="90" height="80">
            <figcaption> Twiter</figcaption></td> 
            <td> </td>
        </figure>
    </tr>
    </table>
    </div>
    </footer>
</body>
</HTMl>