<?PHP
include_once "../config.php"; 
class FilmCore {
    function afficherFilm (){
		echo "<b>id : </b> ".$Film->getid()."<br>";
		echo "<b>Email:</b> ".$Film->getEmail()."<br>";
		echo "<b>DateNaiss:</b> ".$Film->getDateNaiss()."<br>";

		echo "<b>Sexe:</b> ".$Film->getSexe()."<br>";
		echo "<b>DateFilm:</b> ".$Film->getDateFilm()."<br>";
		echo "<b>FilmTiltle:</b> ".$Film->getFilmTiltle()."<br>";
		echo "<b>UrlFilm:</b> ".$Film->getUrlFilm()."<br>";
		echo "<b>DescriptionFilm:</b> ".$Film->getDescriptionFilm()."<br>";
		echo "<b>NoteFilm:</b> ".$Film->getNoteFilm()."<br>";
	}
	function ajouterFilm($Film){
		$sql="insert into Film (Email,DateNaiss,Sexe,
		FilmTiltle,DateFilm,UrlFilm,DescriptionFilm,NoteFilm)values ( :Email,:DateNaiss,:Sexe,:FilmTiltle,:DateFilm,:UrlFilm,:DescriptionFilm,:NoteFilm)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
       
		$Email=$Film->getEmail();
		$DateNaiss=$Film->getDateNaiss();
		$Sexe=$Film->getSexe();
        $FilmTiltle=$Film->getFilmTiltle();
		$DateFilm=$Film->getDateFilm();
		$UrlFilm=$Film->getUrlFilm();
		$DescriptionFilm=$Film->getDescriptionFilm();
		$NoteFilm=$Film->getNoteFilm();


		 
		$req->bindValue(':Email',$Email);
		$req->bindValue(':DateNaiss',$DateNaiss);
		$req->bindValue(':Sexe',$Sexe);
		$req->bindValue(':DateFilm',$DateFilm);
		$req->bindValue(':FilmTiltle',$FilmTiltle);
		$req->bindValue(':UrlFilm',$UrlFilm);
		$req->bindValue(':DescriptionFilm',$DescriptionFilm);
		$req->bindValue(':NoteFilm',$NoteFilm);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	 function afficherFilms(){
		$sql="SElECT * From Film";
		$db = config::getConnexion();
		try{
		$Liste=$db->query($sql);
		return $Liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function supprimerFilm($id){
		$sql="DELETE FROM Film where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
            header('Location: Films.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	 
 	function recupererFilm($id){
		$sql="SELECT * from Film where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
	 function modifierFilm($Film,$id){
		$sql="UPDATE Film SET  Email=:Email,
		DateNaiss=:DateNaiss,
		Sexe=:Sexe,
		FilmTiltle=:FilmTiltle,
		DateFilm=:DateFilm,
		UrlFilm=:UrlFilm,
		DescriptionFilm=:DescriptionFilm,
		NoteFilm=:NoteFilm
		 WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		/* $idn=$Film->getId(); */
        $Email=$Film->getEmail();
		$DateNaiss=$Film->getDateNaiss();
		$Sexe=$Film->getSexe();
        $FilmTiltle=$Film->getFilmTiltle();
		$DateFilm=$Film->getDateFilm();
		$UrlFilm=$Film->getUrlFilm();
		$DescriptionFilm=$Film->getDescriptionFilm();
		$NoteFilm=$Film->getNoteFilm();

		$datas = array(
		':id'=>$id, 
		':Email'=>$Email,
		':DateNaiss'=>$DateNaiss,
		':Sexe'=>$Sexe,
		':FilmTiltle'=>$FilmTiltle,
		':DateFilm'=>$DateFilm,
		':UrlFilm'=>$UrlFilm,
		':DescriptionFilm'=>$DescriptionFilm,
		':NoteFilm'=>$NoteFilm);

	
		$req->bindValue(':id',$id);
		 
		$req->bindValue(':Email',$Email);
		$req->bindValue(':DateNaiss',$DateNaiss);
		$req->bindValue(':Sexe',$Sexe);
		$req->bindValue(':DateFilm',$DateFilm);
		$req->bindValue(':FilmTiltle',$FilmTiltle);
		$req->bindValue(':UrlFilm',$UrlFilm);
		$req->bindValue(':DescriptionFilm',$DescriptionFilm);
		$req->bindValue(':NoteFilm',$NoteFilm);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	 
	 function rechercherListeClub($search){
		$sql="SELECT * from Film where FilmTiltle=$search%";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 


}


?>