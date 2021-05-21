<?php
            include "../Core/FilmCore.php";
include_once "../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="css/style.css" type="text/css">
  
   <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     --> <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Film</title>
</head>
<body>
    <header >
        <img src="Sans titre.png" alt="SATURN" height="50px">
       
        <p>Movie-House</p>

    </header>
    <main>
        <nav class="nav"><p> <a href="index.html">Acceuil</a></p><p  class="actuelle"><a href="#">Liste des films</a> </p><p><a href="AjoutFilm.html">Ajouter un film</a></p></nav>
        <div class="container">
            <!-- php -->
 

            <?php
            
$FilmCo=new FilmCore();
$listeFilms=$FilmCo->afficherFilms();
foreach($listeFilms as $row){
?> 
<div class="moviecard">
               
     <h2 class="cardtitre"><?PHP echo $row['FilmTiltle']; ?></h2>
     <img  src=<?PHP echo $row['UrlFilm']; ?> alt="filmimage" width="300px" height="350px"></img>
     <p class="desc"><?PHP echo $row['DescriptionFilm']; ?></p>
     
     <div class="modsup ">
         <div><form method="post" action="EditFilm.php?id=<?PHP echo $row['id']; ?>"> <input type="submit" value="Modifier" class="Tastegelb"/></form></div>
    <!--  <div><a href="EditFilm.php?id=<?PHP echo $row['id']; ?>">Modifier</a></div> -->

     <div><form action='deleteFilm.php' method="post"><input type="submit" name="delete" value="supprimer" class="Tasterot" > 	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id"></form></div>
     </div>
     <p class="rating"><?PHP echo $row['NoteFilm']; ?></p> 
     <p class="hiden"><?PHP echo $row['id']; ?></p>
 </div>       
 <?PHP
}
?>
   
        
       

           <!-- <div class="moviecard">
               
            <h2 class="cardtitre">Sonic</h2>
            <img  src=https://fr.web.img3.acsta.net/pictures/20/02/10/17/16/0746079.jpg alt="filmimage" width="300px" height="350px"></img>
            <p class="desc">Descr</p>
 
           
        <p class="rating">3</p> 
     


     
    </div> -->
   <!--  <div class="moviecard">
               
        <h2 class="cardtitre">Innvisible Man</h2>
        <img  src=https://fr.web.img6.acsta.net/pictures/20/02/10/13/26/1423227.jpg alt="filmimage" width="300px" height="350px"></img>
        <p class="desc">Descr</p>

       
    <p class="rating">5</p> 
 


 
</div>  -->
             </div>
            
    </main>
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
</html>
