<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vienaskasnius</title>
</head>

<body>
    <?php
    $webmaster_email = "info@vienaskasnius.lt";

    $uzsakymas_page = "uzsakymas.html";
    $klaida_page = "klaida.html";
    $atsiprasome_page = "atsiprasome.html";
    $aciu_page = "aciu.html";

    $Vardas= $_POST['Vardas'] ;
    $pavarde = $_REQUEST['lastname'] ;
    $elpastas = $_REQUEST['email'] ;
    $telefonas = $_REQUEST['phnum'] ;
    $data = $_REQUEST['date'] ;
    $valanda = $_REQUEST['valanda'];
    $minutes = $_REQUEST['minutes'];
    $laikas = "{$valanda}:{$minutes}:00";
    $atsiskaitymas = $_REQUEST['atsiskaitymas'] ;

    $mazas_padeklas = $_REQUEST['mazas'] ;
    $vidutinis_padeklas = $_REQUEST['vidutinis'] ;
    $maxi_padeklas = $_REQUEST['maxi'] ;
    $alausvyno = $_REQUEST['alausvyno'] ;
    $burgeriai = $_REQUEST['burgeriai'] ;
    $kruasanai_lasisa = $_REQUEST['kruasanlasis'] ;
    $kruasanai_serano = $_REQUEST['kruasanseran'] ;
    $kruasan_mozza = $_REQUEST['kruasanmozza'] ;
    $mini_salotos = $_REQUEST['minisalad'] ;
    $vegan = $_REQUEST['vegan'] ;
    $mini_ikrai = $_REQUEST['minisuikrais'] ;
    $mini_krevetem = $_REQUEST['minisukrevetem'] ;
    $vaiku = $_REQUEST['vaiku'] ;
    $komentaras = $_REQUEST['komentaras'] ;

    $dayofweek = date('w', strtotime($data));

    $msg = 
    "Data: " . $data . "\r\n" . 
    "Laikas: " . $laikas . "\r\n" .
    "Vardas: " . $Vardas . "\r\n" . 
    "Pavarde: " . $pavarde . "\r\n" . 
    "TEL NR: " . $telefonas . "\r\n" . 
    "Email: " . $elpastas . "\r\n" .  
    "Atsiskaitymas: " . $atsiskaitymas . "\r\n";



    function append_string($str1, $str2){
      
        // Using Concatenation assignment
        // operator (.)
        $str = $str1 . $str2;
          
        // Returning the result 
        return $str;
    }

    //CREATING APPROVAL MESSAGE
    $patvirtinimo_zinute = "Laba diena, " . "\r\n" . 
    "Siunčiame patvirtinimą Jūsų užsakymui: " ;

    if ($mazas_padeklas > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $mazas_padeklas . " mažas padėklas, ");
        $msg = append_string($msg, "Mazas: " . $mazas_padeklas. "\r\n");
    }

    if ($vidutinis_padeklas > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $vidutinis_padeklas . " vidutinis padėklas, ");
        $msg = append_string($msg, "Vidutinis: " . $vidutinis_padeklas . "\r\n");
    }

    if ($maxi_padeklas > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $maxi_padeklas . " maxi padėklas, ");
        $msg = append_string($msg, "Maxi: " . $maxi_padeklas . "\r\n");
    }

    if ($alausvyno > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $alausvyno . " alaus/vyno padėklas, ");
        $msg = append_string($msg, "Alausvyno: " . $alausvyno. "\r\n");
    }

    if ($burgeriai > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $burgeriai . " burgeriukų, ");
        $msg = append_string($msg, "Burgai: " . $burgeriai . "\r\n");
    }

    if ($kruasanai_serano > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $kruasanai_serano . " kruasanų su serano kumpiu, ");
        $msg = append_string($msg, "Kruasanai su serano kumpiu: " . $kruasanai_serano . "\r\n");
    }

    if ($kruasan_mozza > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $kruasan_mozza . " kruasanų su mozzarella, ");
        $msg = append_string($msg, "Kruasanai su mozzarella: " . $kruasan_mozza . "\r\n");
    }

    if ($kruasanai_lasisa > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $kruasanai_lasisa . " kruasanų su lašiša, ");
        $msg = append_string($msg, "Krausanai su lasisa: " . $kruasanai_lasisa . "\r\n");
    }

    if ($mini_salotos > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $mini_salotos . " mini salotos, ");
        $msg = append_string($msg, "Mini salotos: " . $mini_salotos . "\r\n");
    }

    if ($vegan > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $vegan . " veganiškas padėklas, ");
        $msg = append_string($msg, "Veganiskas: " . $vegan . "\r\n");
    }

    if ($mini_ikrai > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $mini_ikrai . " mini su ikrais, ");
        $msg = append_string($msg, "Mini su ikrais: " . $mini_ikrai. "\r\n");
    }

    if ($mini_krevetem > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $mini_krevetem . " mini su krevetem, ");
        $msg = append_string($msg, "Mini su krevetem: " . $mini_krevetem . "\r\n");
    }

    if ($vaiku > 0){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, $vaiku . " vaikų padėklas. " );
        $msg = append_string($msg, "Vaiku: " . $vaiku . "\r\n");
    }

    $patvirtinimo_zinute = append_string($patvirtinimo_zinute, " Lauksime Jūsų ". $data . " diena " . $laikas . " valanda, Bebrų g. 7, Žvėryne.". "\r\n" );
    if($atsiskaitymas == 'pavedimu'){
        $patvirtinimo_zinute = append_string($patvirtinimo_zinute, "Sąskaitą atsiųsime diena prieš."."\r\n");
    }
    $patvirtinimo_zinute = append_string($patvirtinimo_zinute, "Jeigu planai pasikeistų - praneškite. "."\r\n");
    $patvirtinimo_zinute = append_string($patvirtinimo_zinute, "EMAIL: ". $elpastas);

    $msg = append_string($msg, "Papildomi komentarai: " . $komentaras);


    $prisijungimas = new mysqli("localhost", "username", "passwd", "db");


    
    $atrinkimas = "select * from kasniukas";
    $rezultatas = $prisijungimas->query($atrinkimas);

    $masyvas = $rezultatas->fetch_assoc();

    $uzimtos_dienos = array();

    while($masyvas = $rezultatas->fetch_assoc()) {
        $uzimtos_dienos[]=$masyvas['Pilna'];
    }

    $unique_uzimtos = array_unique($uzimtos_dienos);
    $uzimta = in_array($data, $unique_uzimtos);



    function isInjected($str) {
        $injections = array('(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
        );
        $inject = join('|', $injections);
        $inject = "/$inject/i";
        if(preg_match($inject,$str)) {
            return true;
        }
        else {
            return false;
        }
    }


    // If the user tries to access this script directly, redirect them to the feedback form,
    if (!isset($_REQUEST['email'])) {
    header( "Location: $uzsakymas_page" );
    }

    // If the form fields are empty, redirect to the error page.
    // elseif (empty($vardas) || empty($elpastas)) {
    // header( "Location: $klaida_page" );
    // }

    // /* 
    // If email injection is detected, redirect to the error page.
    // If you add a form field, you should add it here.
    // */
    // elseif ( isInjected($elpastas) || isInjected($vardas) ) {
    // header( "Location: $klaida_page" );
    // }

    // If we passed all previous tests, send the email then redirect to the thank you page.
    elseif( $uzimta == true){
        header( "Location: $atsiprasome_page" );

    }
    else {
        
        $irasymas = "insert into kasniukas value ('$Vardas', '$pavarde', '$telefonas', '$elpastas', '$data', '$laikas', '$atsiskaitymas', '$mazas_padeklas', '$vidutinis_padeklas', '$maxi_padeklas', '$alausvyno', '$burgeriai', '$kruasanai_lasisa', '$kruasanai_serano ', '$kruasan_mozza', '$mini_salotos', '$vegan','$mini_ikrai', '$mini_krevetem', '$vaiku', '0000-00-00')";
        if ($prisijungimas -> query($irasymas)===TRUE){
            echo "Duomenys įrašyti <br>";
        }else {
            echo "Error: " . $irasymas . "<br>" . mysqli_error($prisijungimas);
        }

        mail( "$webmaster_email", "Naujas uzsakymas nuo: {$telefonas}", $msg );
        mail( "$webmaster_email", "Naujas uzsakymas nuo: {$telefonas}", $patvirtinimo_zinute );

        header( "Location: $aciu_page" );
    }





    $prisijungimas->close();
?>

</body>

</html>