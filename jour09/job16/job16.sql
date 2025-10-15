SELECT 
  salles.nom AS "Biggest Room",
  etage.nom AS nom_etage,
  salles.capacite
FROM salles
INNER JOIN etage ON salles.id_etage = etage.id
ORDER BY salles.capacite DESC
LIMIT 1;