<?php  

include_once 'db_connect.php';

try{

    $table=[
        array('ADAGBE', 'Kévin', '95879063', 'Masculin', '1'),
        array('MIGAN', 'Ernest', '96910022', 'Masculin', '1'),
        array('MAGA', 'Sylve', '958790601', 'Masculin', '1'),
        array('MIGAN', 'Janvier', '96911122', 'Masculin', '1'),
        array('ASSAN', 'Hospice', '96179063', 'Masculin', '1'),
        array('BAKPO', 'Gédeon', '96911522', 'Masculin', '1')
    
    ];

    $inserer_chauffeur ="INSERT INTO chauffeur (
        nom,
        prenom, 
        numero_telephone, 
        sexe, 
        disponibilite) 

        VALUES(?, ?, ?, ?, ?)
        
    ";
    $req = $connexion->prepare($inserer_chauffeur);
    
    foreach($table as $chauffeur){
        $req->execute($chauffeur);
    }
    echo "L'insertion des chauffeur est un succes";


} 
catch(PDOException $e){
    echo " L'insertion a echoué ";
    echo $e -> getMessage();

}

?>