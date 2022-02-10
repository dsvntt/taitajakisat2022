<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="styles/styles.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
	<script src="jQuery/jQuery.js"></script>
    <title>Ruosteinen Rauta Oy</title>
</head>

<body>
    <div class="container">

        <?php include "includes/header.php" ?>

        <div id="hero-banner">
            <div id="video">
                <video autoplay loop muted id="background-video">
                    <source src="video/background-video.mp4" type="video/mp4">
                </video>
            </div>

            <div id="overlay">
                <h1>Oikein rakentaminen onnistuu hyvillä ratkaisuilla - Tervetuloa asioimaan Ruosteiseen Rautaan!</h1>
                <button id="read-more"><a href="index.php#serv">Lue lisää</a></button>
            </div>
        </div>

        <main>
            <div id="demonstration">
                <div id="aboutus">
                    <div id="aboutus-text">
                        <h3>Meistä</h3>

                        <p>Ruosteinen Rauta Oy on perustettu 1958. Myymälästämme löydät erittäin laadukkaita rauta ja metallialan tarvikkeita sekä palveluita kaikkeen rakentamiseen – oli kyse sitten korjaamisesta, remontoimisesta tai uuden rakentamisesta suurissa tai pienissä kohteissa. Meillä asiat hoituvat tutulla ammattitaitoisella tavalla alusta loppuun ja kokeneet ammattilaiset auttavat sinua löytämään parhaat ratkaisut, rakennusmateriaalit tuotteet sekä koneet ja vuokralaitteet. <br><br>
                            Myymälämme valikoimasta saat kaiken yhdellä kertaa suuriin ja pieniin rakennus-, remontointi- ja sisustusprojekteihin ulos ja sisälle. Yrityksemme arvot ovat kestävän kehitys, osaava ja hyvinvoiva henkilökunta sekä työturvallisuus. <br><br>
                            Oikein rakentaminen onnistuu hyvillä ratkaisuilla - Tervetuloa asioimaan Ruosteiseen Rautaan! <br><br>
                            Ruosteinen Rauta on Porin Yrittäjien jäsenyritys. Tutustu Porin Yrittäjien toimintaan: <span id="aboutus-link"><a href="https://www.yrittajat.fi/paikallisyhdistykset/porin-yrittajat/">https://www.yrittajat.fi/paikallisyhdistykset/porin-yrittajat/</a></span>
                        </p>
                    </div>

                    <div id="aboutus-img">
                        <img src="img/unsplash images/tekton-e6Wr8LaH-Q8-unsplash.jpg" alt="About Us image" >
                    </div>    
                </div>

                <div id="history">
                    <div id="history-text">
                        <h3>Historia</h3>

                        <p>Vuonna 1958 avattiin ensimmäisen kerran Ruosteinen Rauta Oy:n myymälä Porin kauppatorille, osoitteeseen Pohjoiskauppatori, 28100 Pori. Tässä osoitteessa myymämme toimi aina vuoteen 2020 asti palvellen ensimmäisenä rautakauppana Porilaisia. Myymälämme on toiminut vuodesta 2020 alkaen osoitteessa Urheilutie 1, 28500 Pori, jolloin avasimme supermyymälän – joka on yksi pohjoismaiden suurimpia rauta ja metallialan myymälöitä. Vuonna 2020 laajensimme palveluihimme myös kone ja laitteistovuokrauksen kaikkeen rakentamiseen. <br><br> 
                            Yrityksen perustaja Rauno Rauta on palvellut asiakkaita vuodesta 1958 ja vuonna 2022 Tuukka Rauta jatkaa yrityksen ohjaksissa Reino Raudan jäädessä eläkkeelle. Tuukka Rauta on toiminut yrityksessä jo vuodesta 2000.  Vuonna 2021 yrityksessämme työskenteli 100 alan ammattilaista palvellen asiakkaitamme rautaisella ammattitaidolla. <br><br>
                            Yrityksemme ideana on alusta lähtien tarjota rakennus ja metallialan tuotteita ja palveluita edulliseen hintaan. Palveluumme on aina kuulunut ammattitaitoinen opastus ja asiantuntemus, jota asiakkaamme useiden sukupolvien ajan ovat hyödyntäneet projekteissaan. Voimmekin rehellisesti sanoa, että tunnemme alan läpikotaisin ja tämän pitkän kokemuksen tuomalla varmuudella pystymme tarjoamaan asiakkaillemme kaikki rauta ja metallialanpalvelut luotettavasti ja laadukkaasti – jo vuodesta 1958. <br><br>
                        </p>
                    </div>
                    
                    <div id="history-img">
                        <img src="img/unsplash images/matt-artz-pH6wLT6TVFc-unsplash.jpg" alt="History image" >
                    </div>
                </div>
            </div>

            <div id="references">
                <div id="reference1" class="reference selected">
                    <div class="reference-text">
                        <h3>Suurhanke: Helsinki – Tallinna Silta / Valtakunnan Silta Oy</h3>
                        <p>Massiivinen, reippaan punainen Tallinnan silta avattiin liikenteelle tammikuussa 2020. Siltahanke on yksi Suomen ja Viron suurimpia yhteisiä rakennushankkeita. Tähän merkittävään rakennushankkeeseen osallistuivat kaikki suurimmat rakennusyhtiöt ja toimijat Suomesta ja Virosta.  Ruosteinen Rauta Oy: toimitti kaikki sillan kaiteitten terärakenteiden tukevat pultit ja kaapelien suojaputket pääurakoitsija Valtakunnan Sillat Oy:lle. Pultti ja suojaputkitoimitukset saatiin toimitettua aikataulun mukaisesti. 
                            Valtakunnan Sillat Oy valitsi Ruosteinen Rauta Oy:n pultti ja suojaputkitoimittajaksi aikaisemman yhteistyön perusteella luottaen, että hankkeen tiukassa aikataulussa pysytään, kun pultit ja suojaputkitoimituksissa on luotettava kumppani. 
                            Seppo Silta kertookin yhteistyöstä ja toimituksista seuraavasti ”Ruosteinen Rauta yhtenä suurimpana rautakauppa ja metallialan toimittajana pystyy toimittamaan suuria määriä rakennustarvikkeita kriittisiin projekteihin. Yhteistyö Ruosteisen Raudan kanssa on toiminut aina hyvin ja tehokkaasti”. 
                        </p>
                    </div>
                    
                    <div class="reference-img">
                        <img src="img/referenssi1.jpg" alt="Suurhanke: Helsinki – Tallinna Silta / Valtakunnan Silta Oy" >
                    </div>
                </div>

                <div id="reference2" class="reference">
                    <div class="reference-text">
                        <h3>Konepalvelut vuokraus / Koneline Oy</h3>
                        <p>Koneline Oy tarjoaa maansiirto ja maatyö palveluita rakentajille. Vuonna 2021 KoneLine Oy luopui omista maansiirtokoneistaan ja käyttää urakoissaan Ruosteinen Rauta Oy:n vuokralaitevalikoimaa. <br><br>
                            ”Ruosteinen Rauta Oy” toimittaa meille projekteihin tarvittavia laitteistoja ja koneita. Koneet ja laitteet ovat aina toimivia ja hyvin huollettuja. Siirtyessämme vuokrakoneiden käyttöön, olemme pystyneet tarjoamaan maansiirtotöitä erittäin edulliseen hintaan asiakkaillemme. Vuokrakoneiden käytössä pystymme käyttämään ja saamaan käyttöömme juuri oikean laitteen oikeaan aikaan ja tämä luo liiketoimintaan kustannustehokkuutta. Ruosteinen Rauta on merkittävä kumppanimme, joka mahdollistaa toimintamme joustavuuden. Kannattavuutemme on kasvanut 89% kun siirryimme hyödyntämään Ruosteisen Raudan vuokrakonevalikoimaa toiminnassamme. ” Kertoo toimitusjohtaja Jorma Kontio Koneline Oy:stä. Koneline Oy suositteleekin Ruosteisen Raudan konevalikoimaan pienemmille ja suuremmille työmaille.                                 
                        </p>
                    </div>
                    
                    <div class="reference-img">
                        <img src="img/referenssi2.jpg" alt="Suurhanke: Helsinki – Tallinna Silta / Valtakunnan Silta Oy" >
                    </div>
                </div>

                <div id="reference3" class="reference">
                    <div class="reference-text">
                        <h3>Talonrakentaja Olli Orava</h3>
                        <p>Uniikki koti rakentui Poriin vuonna 2019. Rakentaja Jussi Ahola rakensi unelmiensa kodin hankkien kaikki rakennustarvikkeet Ruosteisen Raudan monipuolisesta valikoimasta. Ahola on 12 metriä korkea moniulotteinen rakennus, oikea taideteos, joka toteutettiin Arkkitehtitoimisto Ainutlaatuinen koti Oy:n suunnitelmien pohjalta. <br><br>
                            Jussi Ahola kommentoi rakennusprojektiaan seuraavasti: ”Rakentaminen oli helppoa ja nopeaa Ruosteisen Raudan avulla. Monipuolinen valikoima mahdollisti kaikkien tarvikkeiden hankinnan yhdestä ja samasta paikasta, jolloin säästin kustannuksista ja sain aina kokonaisvaltaista palvelua kaikkiin rakentamiseen liittyviin kysymyksiin ja palveluihin liittyen. Suosittelen Ruosteisen Raudan valikoimaa lämpimästi kaikille rakentajille pieniin ja isoihin projekteihin.”                                
                        </p>
                    </div>
                    
                    <div class="reference-img">
                        <img src="img/referenssi3.jpg" alt="Suurhanke: Helsinki – Tallinna Silta / Valtakunnan Silta Oy" >
                    </div>
                </div>

                <div id="menu">
                    <span id="tab1" data-pic-index="1" class="selected"></span>
                    <span id="tab2" data-pic-index="2"></span>
                    <span id="tab3" data-pic-index="3"></span>
                </div>
            </div>

            <div id="references-mobile">
                <div class="references-mobile-scrollig">
                    <div class="references-mobile-scrollig-item">
                        <div class="reference-mobile-text">
                            <h3>Suurhanke: Helsinki – Tallinna Silta / Valtakunnan Silta Oy</h3>
                            <p>Massiivinen, reippaan punainen Tallinnan silta avattiin liikenteelle tammikuussa 2020. Siltahanke on yksi Suomen ja Viron suurimpia yhteisiä rakennushankkeita. Tähän merkittävään rakennushankkeeseen osallistuivat kaikki suurimmat rakennusyhtiöt ja toimijat Suomesta ja Virosta.  Ruosteinen Rauta Oy: toimitti kaikki sillan kaiteitten terärakenteiden tukevat pultit ja kaapelien suojaputket pääurakoitsija Valtakunnan Sillat Oy:lle. Pultti ja suojaputkitoimitukset saatiin toimitettua aikataulun mukaisesti. <br><br>
                                Valtakunnan Sillat Oy valitsi Ruosteinen Rauta Oy:n pultti ja suojaputkitoimittajaksi aikaisemman yhteistyön perusteella luottaen, että hankkeen tiukassa aikataulussa pysytään, kun pultit ja suojaputkitoimituksissa on luotettava kumppani. <br><br>
                                Seppo Silta kertookin yhteistyöstä ja toimituksista seuraavasti ”Ruosteinen Rauta yhtenä suurimpana rautakauppa ja metallialan toimittajana pystyy toimittamaan suuria määriä rakennustarvikkeita kriittisiin projekteihin. Yhteistyö Ruosteisen Raudan kanssa on toiminut aina hyvin ja tehokkaasti”. <br><br>
                            </p>
                        </div>
                        
                        <div id="pic1">
                            <img src="img/referenssi1.jpg" class="reference-mobile-img" alt="Suurhanke: Helsinki – Tallinna Silta / Valtakunnan Silta Oy" >
                        </div>
                    </div>
                </div>

                <div class="references-mobile-scrollig">
                    <div class="references-mobile-scrollig-item">
                        <div class="reference-mobile-text">
                            <h3>Konepalvelut vuokraus / Koneline Oy</h3>
                            <p>Koneline Oy tarjoaa maansiirto ja maatyö palveluita rakentajille. Vuonna 2021 KoneLine Oy luopui omista maansiirtokoneistaan ja käyttää urakoissaan Ruosteinen Rauta Oy:n vuokralaitevalikoimaa. <br><br>
                                ”Ruosteinen Rauta Oy” toimittaa meille projekteihin tarvittavia laitteistoja ja koneita. Koneet ja laitteet ovat aina toimivia ja hyvin huollettuja. Siirtyessämme vuokrakoneiden käyttöön, olemme pystyneet tarjoamaan maansiirtotöitä erittäin edulliseen hintaan asiakkaillemme. Vuokrakoneiden käytössä pystymme käyttämään ja saamaan käyttöömme juuri oikean laitteen oikeaan aikaan ja tämä luo liiketoimintaan kustannustehokkuutta. Ruosteinen Rauta on merkittävä kumppanimme, joka mahdollistaa toimintamme joustavuuden. Kannattavuutemme on kasvanut 89% kun siirryimme hyödyntämään Ruosteisen Raudan vuokrakonevalikoimaa toiminnassamme. ” Kertoo toimitusjohtaja Jorma Kontio Koneline Oy:stä. Koneline Oy suositteleekin Ruosteisen Raudan konevalikoimaan pienemmille ja suuremmille työmaille.                                 
                            </p>
                        </div>
                        
                        <div id="pic2">
                            <img src="img/referenssi2.jpg" class="reference-mobile-img" alt="Suurhanke: Helsinki – Tallinna Silta / Valtakunnan Silta Oy" >
                        </div>
                    </div>
                </div>

                <div class="references-mobile-scrollig">
                    <div class="references-mobile-scrollig-item">
                        <div class="reference-mobile-text">
                            <h3>Talonrakentaja Olli Orava</h3>
                            <p>Uniikki koti rakentui Poriin vuonna 2019. Rakentaja Jussi Ahola rakensi unelmiensa kodin hankkien kaikki rakennustarvikkeet Ruosteisen Raudan monipuolisesta valikoimasta. Ahola on 12 metriä korkea moniulotteinen rakennus, oikea taideteos, joka toteutettiin Arkkitehtitoimisto Ainutlaatuinen koti Oy:n suunnitelmien pohjalta. <br><br>
                                Jussi Ahola kommentoi rakennusprojektiaan seuraavasti: ”Rakentaminen oli helppoa ja nopeaa Ruosteisen Raudan avulla. Monipuolinen valikoima mahdollisti kaikkien tarvikkeiden hankinnan yhdestä ja samasta paikasta, jolloin säästin kustannuksista ja sain aina kokonaisvaltaista palvelua kaikkiin rakentamiseen liittyviin kysymyksiin ja palveluihin liittyen. Suosittelen Ruosteisen Raudan valikoimaa lämpimästi kaikille rakentajille pieniin ja isoihin projekteihin.”                                
                            </p>
                        </div>
                        
                        <div id="pic3">
                            <img src="img/referenssi3.jpg" class="reference-mobile-img" alt="Suurhanke: Helsinki – Tallinna Silta / Valtakunnan Silta Oy">
                        </div>
                    </div>
                </div>


            </div>

            <div id="serv"> </div>

                <div id="services">
                    <h2>Palvelut</h2>

                    <div id="service-flex">

                        <div class="service">
                            <h3>Rakennustarvikkeet</h3>

                            <p>Ruosteinen Rauta tarjoaa rakennustarvikkeet alan johtavilta merkeiltä nopeasti toimitettuna suoraan työmaalle. Ruosteisen Raudan Rakennustarvikkeet – palvelun avulla rakentaminen on helppoa ja edullista. Laadukkuus ja edullisuus ovat ominaisuuksia, joita ostajat odottavat rakennustarvikkeilta. Rakennustarvikkeet - valikoimasta löytyy paljon vaihtoehtoja pienempiin tai isompiin rakennus- tai remontointiprojekteihin. </p>

                            <nav id="service-1-nav">
                                <ul>
                                    <li>Perustustarvikkeet</li>
                                    <li>Rakennusmateriaalit</li>
                                    <li>Sähkötarvikkeet</li>
                                    <li>Ilmanvaihto</li>
                                    <li>Lämmitys</li>
                                    <li>LVI</li>
                                    <li>Työkalut ja tarvikkeet</li>
                                </ul>
                            </nav>
                        </div>

                        <div class="service">
                            <h3>Sisustustarvikkeet</h3>

                            <p>Kun talo on rakennettu, voidaan keskittyä sisustamiseen. Me autamme sinua myös kaikissa sisustamiseen liittyvissä ratkaisuissa. Valikoimaamme kuuluu kaikki sisustukseen tarvittavat tuotteet ja ratkaisut, kuten keittiökalusteet, takat, tapetit, lattiapinnoitteet, laatat, koukut ja maalit.</p>
                            <nav class="service-nav">
                                <ul>
                                    <li>Keittiö</li>
                                    <li>Kylpyhuone ja wc</li>
                                    <li>Laatat | lattialaatat, seinälaatat, kuviolaatat</li>
                                    <li>Lattiat | parketit, laminaatit, korkkilattiat, vinyylilattiat</li>
                                    <li>Ovet</li>
                                    <li>Kiukaat</li>
                                    <li>Tapetit</li>
                                    <li>Koukut naulakot ja hyllyt</li>
                                    <li>Takat</li>
                                    <li>Valaistus</li>
                                </ul>
                            </nav>
                        </div>

                        <div class="service">
                            <h3>Piharakennus</h3>

                            <p>Laajasta valikoimastamme löydät kaiken tarvittavan pihan suunnitteluun ja rakentamiseen.</p>

                            <nav class="service-nav">
                                <ul>
                                    <li>Pihakivetys ja päällysteet</li>
                                    <li>Puutarhakalusteet ja tarvikkeet</li>
                                    <li>Kylpytynnyrit ja uima-altaat</li>
                                    <li>Pihavalaisimet</li>
                                </ul>
                            </nav>
                        </div>

                        <div class="service">
                            <h3>Konevuokraus</h3>

                            <p>Vuokraamme laadukkaat ja turvalliset koneet erikokoisiin projekteihin yrityksille, yhteistyökumppaneille ja yksityisille rakentajille ja remontoijille. Varaa ja tilaa tarvitsemasi kone tai laite, kuljetamme koneen kohteeseen sovittuna ajankohtana. Esimerkkejä koneista ja laitteistamme:</p>

                            <nav class="service-nav">
                                <ul>
                                    <li>Henkilönostimet</li>
                                    <li>Nosto- ja siirtokalusto</li>
                                    <li>Maantiivistyskalusto</li>
                                    <li>Maansiirtokalusto</li>
                                    <li>Peräkärryt</li>
                                    <li>Avant</li>
                                    <li>Generaattorit</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                 <div id="services-mobile">
                    <div class="half">
                            <h2>Palvelut</h2>
                            <div class="tab">
                                <input id="tab-one" type="checkbox" name="tabs">
                                <label for="tab-one"><h3>Rakennustarvikkeet</h3></label>
                                <div class="tab-content">
                                    <p>Kun talo on rakennettu, voidaan keskittyä sisustamiseen. Me autamme sinua myös kaikissa sisustamiseen liittyvissä ratkaisuissa. Valikoimaamme kuuluu kaikki sisustukseen tarvittavat tuotteet ja ratkaisut, kuten keittiökalusteet, takat, tapetit, lattiapinnoitteet, laatat, koukut ja maalit.</p>
                                    <nav class="service-nav">
                                        <ul>
                                            <li>Keittiö</li>
                                            <li>Kylpyhuone ja wc</li>
                                            <li>Laatat | lattialaatat, seinälaatat, kuviolaatat</li>
                                            <li>Lattiat | parketit, laminaatit, korkkilattiat, vinyylilattiat</li>
                                            <li>Ovet</li>
                                            <li>Kiukaat</li>
                                            <li>Tapetit</li>
                                            <li>Koukut naulakot ja hyllyt</li>
                                            <li>Takat</li>
                                            <li>Valaistus</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="tab">
                                <input id="tab-two" type="checkbox" name="tabs">
                                <label for="tab-two"><h3>Sisustustarvikkeet</h3></label>
                                <div class="tab-content">
                                    <p>Kun talo on rakennettu, voidaan keskittyä sisustamiseen. Me autamme sinua myös kaikissa sisustamiseen liittyvissä ratkaisuissa. Valikoimaamme kuuluu kaikki sisustukseen tarvittavat tuotteet ja ratkaisut, kuten keittiökalusteet, takat, tapetit, lattiapinnoitteet, laatat, koukut ja maalit.</p>
                                    <nav class="service-nav">
                                        <ul>
                                            <li>Keittiö</li>
                                            <li>Kylpyhuone ja wc</li>
                                            <li>Laatat | lattialaatat, seinälaatat, kuviolaatat</li>
                                            <li>Lattiat | parketit, laminaatit, korkkilattiat, vinyylilattiat</li>
                                            <li>Ovet</li>
                                            <li>Kiukaat</li>
                                            <li>Tapetit</li>
                                            <li>Koukut naulakot ja hyllyt</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="tab">
                                <input id="tab-three" type="checkbox" name="tabs">
                                <label for="tab-three"><h3>Piharakennus</h3></label>
                                <div class="tab-content">
                                    <p>Laajasta valikoimastamme löydät kaiken tarvittavan pihan suunnitteluun ja rakentamiseen.</p>

                                    <nav class="service-nav">
                                        <ul>
                                            <li>Pihakivetys ja päällysteet</li>
                                            <li>Puutarhakalusteet ja tarvikkeet</li>
                                            <li>Kylpytynnyrit ja uima-altaat</li>
                                            <li>Pihavalaisimet</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="tab">
                                <input id="tab-four" type="checkbox" name="tabs">
                                <label for="tab-four"><h3>Konevuokraus</h3></label>
                                <div class="tab-content">
                                    <p>Vuokraamme laadukkaat ja turvalliset koneet erikokoisiin projekteihin yrityksille, yhteistyökumppaneille ja yksityisille rakentajille ja remontoijille. Varaa ja tilaa tarvitsemasi kone tai laite, kuljetamme koneen kohteeseen sovittuna ajankohtana. Esimerkkejä koneista ja laitteistamme:</p>

                                    <nav class="service-nav">
                                        <ul>
                                            <li>Henkilönostimet</li>
                                            <li>Nosto- ja siirtokalusto</li>
                                            <li>Maantiivistyskalusto</li>
                                            <li>Maansiirtokalusto</li>
                                            <li>Peräkärryt</li>
                                            <li>Avant</li>
                                            <li>Generaattorit</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                    </div>
                 </div>

            <?php include "includes/footer.php" ?>
        </main>
    </div>
    
</body>

</html>
