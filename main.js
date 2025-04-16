let candidatures =[
    { id: 1,
    nom: "Ali Benali",
    age: 20,
    projet: "Application mobile de recyclage",
    statut: "en attente" 
  }
    ];
    
     function ajouterCandidature(id ,nom, age, projet , statut){
       
       const newcandidat = {id ,nom, age, projet , statut}
       candidatures.push(newcandidat)
     }
     
     
     ajouterCandidature(2 , "Fatima Zahra", 22, "Plateforme de tutorat" ,"en attente" );
   
     
      console.log(candidatures);
      
      
      validerCandidature(id){
        
        for (var i = 0; i < candidatures.length; i++) {
          if (candidatures.id == id) {
            candidatures.statut =  "validée" ;
  
          }
        }
        
      }
      
      rejeterCandidature(id){
        
        for (var i = 0; i < candidatures.length; i++) {
          if (candidatures.id == id) {
            candidatures.statut =  "rejetée" ;
  
          }
        }
        
      }
      
      function rechercherCandidat(nom) {
    const candidat = candidatures.find(candidature => candidature.nom === nom);
    if (found) {
      console.log("candidat trouvé :", candidat);
    } else {
      console.log("Aucun candidat trouvé.");
    }
  }
  
    function filtrerParStatut(statut){
      
      switch (candidature.statut) {
        case 'en attente':
          
          break;
        
        default:
          
      }
      
      
    }
    
    
    
    
    
    
      
      
      
      
      
      
     
     
  
       
   
  