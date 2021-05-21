<?PHP
/* include "config.php"; */
class Film{
	private int $id ;
	private string $Email;
	private string $DateNaiss;
	private string $Sexe;
	private string $FilmTiltle;
	private string $DateFilm;
	private string $UrlFilm;
	private string $DescriptionFilm;
	private int $NoteFilm;

	function __construct(string $Email,string $DateNaiss,string $Sexe,string $FilmTiltle,string $DateFilm,string $UrlFilm,string $DescriptionFilm,int $NoteFilm){
		
		$this->Email=$Email;
		$this->DateNaiss=$DateNaiss;
		$this->Sexe=$Sexe;
		$this->FilmTiltle=$FilmTiltle;
		$this->DateFilm=$DateFilm;
		$this->UrlFilm=$UrlFilm;
		$this->DescriptionFilm=$DescriptionFilm;
		$this->NoteFilm=$NoteFilm;
	}
	
	
    function getId(){
		return $this->id;
	} 
	function getEmail(){
		return $this->Email;
	}
	function getDateNaiss(){
		return $this->DateNaiss;
	}
	function getSexe(){
		return $this->Sexe;
	}
	function getFilmTiltle(){
		return $this->FilmTiltle;
	}
	function getDateFilm(){
		return $this->DateFilm;
	}
	function getUrlFilm(){
		return $this->UrlFilm;
	}
	function getDescriptionFilm() {
		return $this->DescriptionFilm;
	}
	function getNoteFilm() {
		return $this->NoteFilm;
	}


	function setId(){
		$this->id=$id;

	}
	function setEmail(){
		 $this->Email=$Email;
	}
	function setDateNaiss(){
		 $this->DateNaiss=$DateNaiss;
	}
	function setSexe(){
		 $this->Sexe=$Sexe;
	}
	function setFilmTiltle(){
		 $this->FilmTiltle=$FilmTiltle;
	}
	function setDateFilm(){
		 $this->DateFilm=$DateFilm;
	}
	function setUrlFilm(){
		 $this->UrlFilm=$UrlFilm;
	}
	function setDescriptionFilm() {
		 $this->DescriptionFilm=$DescriptionFilm;
	}
	function setNoteFilm() {
		 $this->NoteFilm=$NoteFilm;
	}

	
}

?>