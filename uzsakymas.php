<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/uzsakymas.css">
    <link rel="stylesheet" href="style/footer.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo_tray.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Užsakyti užkandžius Vilniuje</title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <a href="index.html" class="nav-logo"><img style="border-radius: 0px;" class="nav-logo-img"
                    src="images/logo_baltas.png"></a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="meniu.html" class="nav-link">MENIU</a>
                </li>
                <li class="nav-item">
                    <a href="galerija.html" class="nav-link">GALERIJA</a>
                </li>
                <li class="nav-item">
                    <a href="kontaktai.html" class="nav-link">KONTAKTAI</a>
                </li>
                <li class="nav-item">
                    <a href="uzsakymas.php" class="nav-link" style="color: #DE6A41;">UŽSAKYTI</a>
                </li>
            </ul>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <form class="form" action="db.php" method="post">
        <div class="line-wraper-form">
            <div class="info-label-form">
                <label class="name">Vardas</label>
            </div>
            <div class="info-input-form">
                <input class="user-data" type="text" id="fname" name="Vardas" required>
            </div>
        </div>
        <div class="line-wraper-form">
            <div class="info-label-form">
                <label class="name">Pavardė</label>
            </div>
            <div class="info-input-form">
                <input class="user-data" type="text" id="lname" name="lastname">
            </div>
        </div>
        <div class="line-wraper-form">
            <div class="info-label-form">
                <label class="name">El.Paštas</label>
            </div>
            <div class="info-input-form">
                <input class="user-data" type="email" id="email" name="email" required>
            </div>
        </div>
        <div class="line-wraper-form">
            <div class="info-label-form">
                <label class="name">Tel.Nr</label>
            </div>
            <div class="info-input-form">
                <input class="user-data" type="number" id="phnum" name="phnum" required>
            </div>
        </div>
        <div class="line-wraper-form">
            <div class="info-label-form">
                <label class="name">Data</label>
            </div>
            <div class="info-input-form">
                <input class="user-data date" type="date" id="date" name="date" oninput="check_date(this)" required>
            </div>
        </div>
        <div class="line-wraper-form error">
            <div class="info-label-error">
                ATSIPRAŠOME, BET ŠIAI DIENAI LAISVŲ VIETŲ NĖRA
            </div>
        </div>
        <div class="line-wraper-form">
            <div class="info-label-form">
                <label class="name">Atsiėmimo laikas</label>
            </div>
            <div class="info-input-form">
                <select class="user-data-time" id="valanda" name="valanda"></select>
                <select class="user-data-time" id="minutes" name="minutes"></select>
                <!-- <input class="user-data date" type="time" id="time" name="laikas" required min="09:00:00" max="18:00:00" step="900"> -->
            </div>
        </div>
        <div class="line-wraper-form">
            <div class="info-label-form">
                <label class="name">Atsiskaitymas</label>
            </div>
            <div class="info-input-form">
                <select class="atsiskaitymas" id="atsiskaitymas" name="atsiskaitymas" value="" required>
                    <option value="grynais">Grynais</option>
                    <option value="pavedimu">Pavedimu</option>
                </select>
            </div>
        </div>

        <div class="order-wrap">
            <div class="order-box">
                <div class="content-wrap">
                    <img class="pic image" src="images/70vnt.jpg" alt="Vieno kąsnio sumuštiniai">
                    <p>
                        <span class="pavadinimas">STANDARTINIAI PADĖKLAI</span><br>
                        <span class="sudetis">Sudėtis: </span><span class="ingridientai">Sūdyta lašiša, serrano kumpis,
                            kalakutiena, vytinta kiauliena, vytinta jautienos dešra, karališkos krevetės, raudonieji
                            ikrai, kelios rūšys sūrių.</span><br><br>
                    </p>
                    <div class="line-wraper mobile-line">
                        <div class="info-label">
                            <span>Mažas 60 VNT</span>
                        </div>
                        <div class="info-input">
                            <select class="mazas standart" id='mazas' name="mazas" onChange="kaina_stand(30)" value="">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="line-wraper mobile-line">
                        <div class="info-label">
                            <span>Vidutinis 70 VNT</span>
                        </div>
                        <div class="info-input">
                            <select class="vidutinis standart" id='vidutinis' name="vidutinis"
                                onChange="kaina_stand(35)" value="">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="line-wraper mobile-line">
                        <div class="info-label">
                            <span>Maxi 100 VNT</span>
                        </div>
                        <div class="info-input">
                            <select class="maxi standart" id='maxi' name="maxi" onChange="kaina_stand(50)" value="">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="kiekis-wrap">
                    <span class="kaina-span">KAINA:</span>
                    <span class="euro">&euro;<span class="final-price-stand">00</span></span>
                </div>
            </div>
            <div class="order-box">
                <div class="content-wrap">
                    <img class="pic image" src="images/alausvyno.jpg" alt="Užkandis prie alaus">
                    <p>
                        <span class="pavadinimas">ALAUS/VYNO PADĖKLAS</span><br>
                        <span class="sudetis">Sudėtis: </span><span class="ingridientai">kepta duona, kalmaro žiedai,
                            daržovių suktinukai, po 5 rūšis skirtingų sūrių ir mėsos produktų, džiovintos figos, duonos
                            lazdelės, riešutai, traškučiai.</span><br><br>
                    </p>
                    <div class="kiekis-wrap">
                        <span class="kiekis-text">KIEKIS</span>
                        <select class="kiekis vntJs" id="alaus" onChange="galutine_kaina(this)" name="alausvyno">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span class="kaina-span">KAINA:</span>
                        <span class="euro">&euro;<span class="final-price">00</span></span>
                    </div>
                </div>
            </div>
            <div class="order-box">
                <div class="content-wrap">
                    <img class="pic image" src="images/burgeriukai.jpg" alt="mini burgeriukai">
                    <p>
                        <span class="pavadinimas">MINI BURGERIUKAI</span><br>
                        <span class="sudetis">Minimalus užsakomas kiekis - 10 vnt. <br>Sudėtis: </span><span
                            class="ingridientai">
                            Sudėtis:
                            Traškus vištienos kepsnelis su cheddar sūriu.</span><br><br>
                    </p>
                    <div class="kiekis-wrap">
                        <span class="kiekis-text">KIEKIS</span>
                        <input class="kiekis-input vntJs" id="burgeriai" name="burgeriai" oninput="galutine_kaina(this)"
                            type="text" maxlength="3" size="3">
                        <span class="kaina-span">KAINA:</span>
                        <span class="euro">&euro;<span class="final-price">00</span></span>
                    </div>
                </div>
            </div>
            <div class="order-box">
                <div class="content-wrap">
                    <img class="pic image" src="images/kruasanai.jpg" alt="kruasanai">
                    <p>
                        <span class="pavadinimas">KRUASANAI</span><br>
                        <span class="sudetis">Minimalus užsakomas kiekis - 10 vnt. <br>Sudėtis: </span><span
                            class="ingridientai">
                            su serano kumpiu, su lašiša arba su saulėje džiovintais pomidorais ir mozzarella
                        </span><br><br>
                    </p>
                    <div class="kiekis-wrap">
                        <span class="kaina-span">KAINA:</span>
                        <span class="euro">&euro;<span class="final-price">00</span></span>
                    </div>
                    <div class="line-wraper mobile-line">
                        <div class="info-label">
                            <span>Su lašiša</span>
                        </div>
                        <div class="info-input">
                            <input class="kiekis-input-kruasan vntJs" id="kruasanai" name="kruasanlasis"
                                oninput="galutine_kaina(this)" type="text" maxlength="3" size="3">
                        </div>
                    </div>
                    <div class="line-wraper mobile-line">
                        <div class="info-label">
                            <span>Su serano kumpiu</span>
                        </div>
                        <div class="info-input">
                            <input class="kiekis-input-kruasan vntJs" id="kruasanai" name="kruasanseran"
                                oninput="galutine_kaina(this)" type="text" maxlength="3" size="3">
                        </div>
                    </div>
                    <div class="line-wraper mobile-line">
                        <div class="info-label">
                            <span>Su mozzarella</span>
                        </div>
                        <div class="info-input">
                            <input class="kiekis-input-kruasan vntJs" id="kruasanai" name="kruasanmozza"
                                oninput="galutine_kaina(this)" type="text" maxlength="3" size="3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-box">
                <div class="content-wrap">
                    <img class="pic image" src="images/minisolotos.jpg" alt="mini salotos">
                    <p>
                        <span class="pavadinimas">MINI SALOTOS</span><br>
                        <span class="sudetis">Sudėtis: </span><span class="ingridientai">Avokadų ir pomidorų salotos,
                            burrata sūrio salotos su pomidorais ir pesto, cezario salotos su vištiena ir krevetėmis, tex
                            mex salotos su jautiena, wakame salotos su sūdyta lašiša.</span><br><br>
                    </p>
                    <div class="kiekis-wrap">
                        <span class="kiekis-text">KIEKIS</span>
                        <select class="kiekis vntJs" id="minisalotos" onChange="galutine_kaina(this)" name="minisalad">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span class="kaina-span">KAINA:</span>
                        <span class="euro">&euro;<span class="final-price">00</span></span>
                    </div>
                </div>
            </div>
            <div class="order-box">
                <div class="content-wrap">
                    <img class="pic image" src="images/vegan.jpg" alt="Užkandis veganams">
                    <p>
                        <span class="pavadinimas">VEGANIŠKAS PADĖKLAS</span><br>
                        <span class="sudetis">Sudėtis: </span><span class="ingridientai">daržovių suktinukai, rūkytos
                            paprikos užkandis, sojos kepsneliai, virta dešra su provanso žolelėmis, daržovių rutuliukas,
                            žuvies piršteliai daržovių pagrindo, veganiška chorizo dešra, avokadų ir saulėje dž.
                            pomidorų užtepėlė.</span><br><br>
                    </p>
                    <div class="kiekis-wrap">
                        <span class="kiekis-text">KIEKIS</span>
                        <select class="kiekis vntJs" id="veganiskas" onChange="galutine_kaina(this)" name="vegan">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span class="kaina-span">KAINA:</span>
                        <span class="euro">&euro;<span class="final-price">00</span></span>
                    </div>
                </div>
            </div>
            <div class="order-box">
                <div class="content-wrap">
                    <img class="pic image" src="images/minisuikrais.jpg" alt="mini padėklas">
                    <p>
                        <span class="pavadinimas">MINI SU IKRAIS</span><br>
                        <span class="sudetis">Sudėtis: </span><span class="ingridientai">kalakutiena, raudonieji ikrai,
                            serrano kumpis, mocarela, kiaulienos nugarinė.</span><br><br>
                    </p>
                    <div class="kiekis-wrap">
                        <span class="kiekis-text">KIEKIS</span>
                        <select class="kiekis vntJs" id="minisuikrais" onChange="galutine_kaina(this)"
                            name="minisuikrais">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span class="kaina-span">KAINA:</span>
                        <span class="euro">&euro;<span class="final-price">00</span></span>
                    </div>
                </div>
            </div>
            <div class="order-box">
                <div class="content-wrap">
                    <img class="pic image" src="images/minisukrevetem.jpg" alt="mini padėklas">
                    <p>
                        <span class="pavadinimas">MINI SU KREVETĖM</span><br>
                        <span class="sudetis">Sudėtis: </span><span class="ingridientai">vytinta jautienos dešra,
                            karališkos krevetės, vytinta kiauliena, karvės pieno sūris, sūdyta lašiša.</span><br><br>
                    </p>
                    <div class="kiekis-wrap">
                        <span class="kiekis-text">KIEKIS</span>
                        <select class="kiekis vntJs" id="minisukrevetem" onChange="galutine_kaina(this)"
                            name="minisukrevetem">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span class="kaina-span">KAINA:</span>
                        <span class="euro">&euro;<span class="final-price">00</span></span>
                    </div>
                </div>
            </div>
            <div class="order-box">
                <div class="content-wrap">
                    <img class="pic image" src="images/vaikiskas.jpg" alt="vaikų užkandis">
                    <p>
                        <span class="pavadinimas">PADĖKLAS VAIKAMS</span><br>
                        <span class="sudetis">Sudėtis: </span><span class="ingridientai">vištienos lazdelės,
                            kalakutienos kepsneliai, bandelės su kumpiu ir sūriu, kruasanai su vištiena, mini picos su
                            saliamiu, mini burgeriukai, daržovių lazdelės su humusu, sezoninės uogos, mini zefyrai,
                            riešutai, krekeriai, džiovinti bananai ir papajos.</span><br><br>
                    </p>
                    <div class="kiekis-wrap">
                        <span class="kiekis-text">KIEKIS</span>
                        <select class="kiekis vntJs" id="vaiku" onChange="galutine_kaina(this)" name="vaiku">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span class="kaina-span">KAINA:</span>
                        <span class="euro">&euro;<span class="final-price">00</span></span>
                    </div>
                </div>
            </div>

            <div class="komentaras-wrap">
                <span class="komentaras">KOMENTARAS</span>
                <div class="komentaras-input-wrap">
                    <!-- <input class="komentaras-input" type="textarea" name="komentaras"> -->
                    <textarea class="komentaras-input" rows="4" cols="50" name="komentaras">

                </textarea>
                </div>
            </div>
            <div class="galutine-kaina-wrap">
                <span class="galutine-kaina-alert">BENDRA UŽSAKYMO SUMA</span>
                <span class="euro-final">&euro;<span class="galutine-kaina-num" type="hidden" name='galutine_suma'
                        value="innerHTML">00</span></span>

            </div>
            <div class="uzsakyti-btn-wrap">
                <button class="uzsakyti-btn" type="submit" name="uzsakyti"> Užsakyti</button>
            </div>
        </div>
    </form>
    <center>
        <div class="modal hide-modal">
            <div class="modal-content">
                <p> <span class="close-modal">&times;</span></p>
            </div>
        </div>
    </center>

    <hr class="horizontal-line">

    <div class="footer" id="footer">
        <div class="left-footer-box">
            <img class="footer-logo" src="images/logo_baltas.png">
        </div>
        <div class="center-footer-box">
        </div>
        <div class="right-footer-box">

            <div class="contact-wrap">
                <p>
                    <span style="font-size: 16px;"><img class="contact-icon-kontaktai" src="images/phone.png"> <a
                            href="tel:+37061621663" class="contact-link">+37061621663</a></span> <br>
                    <span style="font-size: 16px;"><img class="contact-icon-kontaktai" src="images/mail.png"> <a
                            href="mailto:info@vienaskasnius.lt" class="contact-link">info@vienaskasnius.lt</a></span>
                    <br>
                    <span style="font-size: 16px;"><img class="contact-icon-kontaktai" src="images/facebook.png"> <a
                            href="https://www.facebook.com/Vienaskasnius/"
                            class="contact-link">/VIENASKASNIUS</a></span> <br>
                    <span style="font-size: 16px;"><img class="contact-icon-kontaktai" src="images/insta.png"> <a
                            href="https://www.instagram.com/vienaskasnius/"
                            class="contact-link">@VIENASKASNIUS</a></span> <br>
                </p>
            </div>
        </div>
    </div>
    <!-- error zinute del jeigu diena yra uzimta -->
    <?php 
    
        $prisijungimas = new mysqli("localhost", "username", "passwd", "db");

        $atrinkimas = "select * from kasniukas";
        $rezultatas = $prisijungimas->query($atrinkimas);

        $masyvas = $rezultatas->fetch_assoc();

        $uzimtos_dienos = array();

        while($masyvas = $rezultatas->fetch_assoc()) {
            $uzimtos_dienos[]=$masyvas['Pilna'];
        }

        $unique_uzimtos = array_unique($uzimtos_dienos);
    
    
    
    ?>
    <script>
    const error_div = document.querySelector(".error");

    var uzimtos_dienos = <?php echo json_encode($uzimtos_dienos); ?>;

    function check_date(user_data) {
        if (uzimtos_dienos.includes(user_data.value) == true) {
            error_div.style.visibility = 'visible';
            error_div.style.display = 'block';
            error_div.style.position = 'relative';
        } else {
            error_div.style.visibility = 'hidden';
            error_div.style.display = 'block';
            error_div.style.position = 'absolute';
        }

    }
    </script>

    <script src="script/uzsakymas.js"></script>
    <script src="script/meniu.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>