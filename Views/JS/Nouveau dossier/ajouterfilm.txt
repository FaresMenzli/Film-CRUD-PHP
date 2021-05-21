function verif() {
    var Email = document.getElementById("email").value
    var DateNaissance = document.getElementById("DateN").value
    var Sexe=""
    if (document.getElementById("Homme").checked == true ) Sexe="Homme"
    else if (document.getElementById("Femme").checked == true ) Sexe="Femme"
    var Titre = document.getElementById("Titre").value
    var DateSortie = document.getElementById("dates").value
    var Url = document.getElementById("newimg").value
    var Descr = document.getElementById("newdesc").value
    var Note = document.getElementById("newrating").value


    if (Email==""||DateNaissance==""||Sexe==""||Titre==""||DateSortie==""||Descr=="") alert("vous devez remplir tout les champs")

    else {
         if (Email.includes("@")==false) alert("vous devez entrer une adresse e-mail")
    var prenom=""
    var nom=""
    
    var x="" ;
    for (var i=Email.indexOf("@") ; i<Email.length ; i++)
        x +=Email[i]
        
        
    
         if (x != "@esprit.tn") alert ("Utilisez votre e-mail ESPRIT SVP")
    
        else {
          
        for(var j=0;j<Email.indexOf(".");j++)
        prenom+=Email[j]
        for(var k=Email.indexOf(".")+1;k<Email.indexOf("@");k++)
        nom+=Email[k]
        }

    if ((document.getElementById("Homme").checked == false) && (document.getElementById("Femme").checked == false)) alert("vous devez choisir votre sexe")
    if ( Date().split(" ")[3]-DateNaissance.split("-")[0]<18) alert("vous devez avoir 18 ans")
    if (Url.substr(Url.lastIndexOf("."))!=".jpg" ) alert ("l'url d'image doit etre .JPG")

  
    }
  
  //alert("bienvenue "+prenom.toLocaleUpperCase()+" "+nom.toUpperCase()) 
    
        //console.log(Email+" "+DateNaissance+" "+Sexe+" "+Titre+" "+DateSortie+" "+Url+" " + Descr+" " + Note)
    //}
    
    }