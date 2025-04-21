SELECT * FROM utilisateurs
INNER JOIN profils on utilisateurs.id = profils.utilisateur_id
INNER JOIN profil_langue on profils.utilisateur_id =profil_langue.profil_id
INNER JOIN langues on profil_langue.langue_id = langues.id
WHERE utilisateurs.role ='freelance'
AND langues.nom ='anglais'
AND profil_langue.niveau='avancé'


SELECT * FROM utilisateurs
INNER JOIN profils on utilisateurs.id = profils.utilisateur_id
INNER JOIN profil_competence on profils.id =profil_competence.profil_id
WHERE utilisateurs.role='freelance'
AND COUNT(competences.name)>3

SELECT utilisateurs.nom FROM utilisateurs
INNER JOIN profils on utilisateurs.id != profils.utilisateur_id
WHERE utilisateurs.role='freelance'


SELECT utilisateurs.nom FROM utilisateurs
INNER JOIN projets on utilisateurs.id != projets.client_id
WHERE utilisateurs.role='client'



SELECT projets.titre FROM projets
INNER JOIN offres on projets.id = offres.projet_id
WHERE projets.statut='ouvert'




