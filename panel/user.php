<?php
    require('../konekcija/conn.php');
    require('prijava.php');
    require('header-user.php');
    ?>
  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Dobrodošao<span></span></h1>
        <h1 style= "text-transform: capitalize;"> <?php print $_SESSION["korisnik_sesija"]; ?> <span></span></h1>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

<!-- Service Section -->
<section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Us<span>lu</span>ge</h1>
        <p>Naša kompanija se ističe u proizvodnji visokokvalitetne aluminijumske (alu) i PVC stolarije, koristeći najnoviju tehnologiju i pažljivo odabrane materijale. Posvećeni smo pružanju personalizovanih rješenja za prozore, vrata i druge proizvode, savršeno prilagođene potrebama naših klijenata! </p>
      </div>
      <div class="service-bottom">
      <div class="service-item">
          <div class="icon"><img src="https://www.creativefabrica.com/wp-content/uploads/2021/03/22/Configuration-customize-icon-Graphics-9858324-1-1-580x386.jpg" /></div>
          <h2>Dizajn</h2>
          <p> Naš dizajn stolarije je spoj estetike i funkcionalnosti. Prilagodljivi prozori, vrata i fasadni sistemi odražavaju modernu eleganciju uz naglasak na energetskoj efikasnosti. Svaki komad je pažljivo oblikovan kako bi se uklopio u vaš stil i prostor, obezbjeđujući atraktivan vizuelni dojam i praktičnu upotrebu.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://dzs.gov.hr/userdocsimages//Slike%20za%20vijesti/Industrija%20vijest%20u%20travnju%202023.jpg?width=1500&height=1000&mode=max" /></div>
          <h2>Proizvodnja</h2>
          <p>Iskoristite vrhunsku ponudu naše stolarije koja obuhvata prozore, vrata i fasadne sisteme visokog kvaliteta. Naša posvećenost estetici, energetskoj efikasnosti i brzoj isporuci čini nas pouzdanim partnerom za poboljšanje vašeg prostora. Obratite se našem stručnom timu za personalizovane savjete i jednostavnu kupovinu. </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://www.adlibitum.hr/wp-content/uploads/2014/10/prodaja-adlibitum-1024x683.jpg" /></div>
          <h2>Prodaja</h2>
          <p>Pružamo visokokvalitetne prozore i vrata prilagođene vašim potrebama. Sa punim sjajem garantujemo estetiku, energetsku efikasnost i brzu isporuku. Naš stručni tim stoji Vam na raspolaganju za personalizovane savjete i jednostavnu kupovinu. Transformišite svoj prostor i uđite uspješno u poslovanje sa nama. </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://montazanamjestaj.weebly.com/uploads/5/0/6/9/50698219/_5926901_orig.jpg" /></div>
          <h2>Montaža</h2>
          <p>Montaža aluminijske i PVC stolarije pruža besprijekoran spoj između kvaliteta i preciznosti. Naši iskusni tehničari brinu se o brzoj i efikasnoj instalaciji prozora, vrata i drugih proizvoda, obezbjeđujući siguran i trajan rezultat. Bez obzira na veličinu projekta, posvećeni smo pružanju visokog standarda. </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Prethodni <span>Projekti</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Projekat 1</h1>
            <h2>Prozori i roletne</h2>
            <p>Transformišite svoj prostor s našim vrhunskim prozorima, prilagođenim modernom dizajnu i energetskoj efikasnosti. Naša široka paleta roletni pruža dodatnu privatnost i kontrolu svjetlosti, uz eleganciju koja se lako uklapa u svaki prostor. Oplemenite svoj dom ili poslovni prostor uz naše prozore i roletne, spoj stila i funkcionalnosti.</p>
          </div>
          <div class="project-img">
            <img src="https://i.imgur.com/VvJu6Dv.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projekat 2</h1>
            <h2>Alu ograde</h2>
            <p> Oplemenite svoj eksterijer uz naše aluminijumske ograde koje donose savremeni dizajn i trajnu izdržljivost. Naša pažljivo oblikovana alu ograda pruža sigurnost i estetiku, istovremeno zahtevajući minimalno održavanje. Personalizujte svoj prostor uz naše aluminijumske ograde, dodajući eleganciju i funkcionalnost vašem okruženju.</p>
          </div>
          <div class="project-img">
            <img src="https://i.imgur.com/XJov1vb.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projekat 3</h1>
            <h2>Garažna vrata</h2>
            <p>Neka naša garažna vrata budu vaša prva linija odbrane i stilski element vašeg doma. Sa pažljivo izrađenim dizajnom, naša vrata kombinuju sigurnost, praktičnost i estetiku. Pomoću visokokvalitetnih materijala i modernih tehnologija, obezbjeđujemo vrata koja će izdržati test vremena, pružajući vam sigurnost i atraktivan izgled vaše garaže. Transformišite funkcionalnost i izgled vašeg doma uz naša garažna vrata.</p>
          </div>
          <div class="project-img">
            <img src="https://i.imgur.com/3uBG80M.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projekat 4</h1>
            <h2>Alu terase</h2>
            <p>Elegantne terasne ograde, aluminijske konstrukcije za tende i estetski privlačne podne obloge čine naš asortiman idealnim izborom za proširenje vašeg životnog prostora. Osvježite svoju terasu uz naše visokokvalitetne aluminijumske proizvode, pružajući optimalnu kombinaciju stila i izdržljivosti! </p>
          </div>
          <div class="project-img">
            <img src="https://i.imgur.com/r7qFQJH.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projekat 5</h1>
            <h2>PVC paneli</h2>
            <p>Naši PVC paneli predstavljaju savršeno rješenje za estetsko unapređenje vašeg prostora. S lakoćom se postavljaju i održavaju, pružajući dugotrajan i moderan izgled zidova unutar vašeg doma. Sa širokim izborom boja i dezena, naši PVC paneli omogućavaju personalizaciju prostora i stvaranje prijatnog ambijenta. Ujedinite funkcionalnost i estetiku uz naše visokokvalitetne PVC panele! </p>
          </div>
          <div class="project-img">
            <img src="https://i.imgur.com/0IpOmvh.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projekat 6</h1>
            <h2>Pergole & tende</h2>
            <p>Naše pergole i tende su elegantna rješenja koja transformišu vaše spoljašnje prostore u udobna i zaštićena okupljališta. Pružajući savršenu ravnotežu između zaštite od sunca i estetske privlačnosti, naše pergole čine vaš vrt ili terasu prijatnim mjestom za boravak tokom svih vremenskih uslova. Sa visokokvalitetnim materijalima i prilagođenim dizajnom, naše pergole i tende omogućavaju vam da uživate u otvorenom prostoru, bez obzira na vremenske uslove.!</p>
          </div>
          <div class="project-img">
            <img src="https://i.imgur.com/6xE2B3B.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projekat 7</h1>
            <h2>Vrtni namještaj</h2>
            <p>Naš vrtni namještaj spoj je udobnosti, stila i izdržljivosti, prilagođen za savršeno uživanje u otvorenom prostoru. Sa pažljivo biranim materijalima otpornim na vremenske uslove, naš vrtni namještaj pruža dugotrajnu udobnost i estetsku privlačnost. Bez obzira da li se radi o elegantnim stolovima i stolicama, udobnim ležaljkama ili funkcionalnim garniturama, naš asortiman vrtnog namještaja stvoren je kako bi vaš vrt postao oaza opuštanja. </p>
          </div>
          <div class="project-img">
            <img src="https://i.imgur.com/GE1pATI.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projekat 8</h1>
            <h2>Sigurnosne kapije</h2>
            <p>Ovi čvrsti i sofisticirani ulazni sistemi dizajnirani su s posebnom pažnjom na sigurnost, pružajući potpunu zaštitu za vaš dom ili poslovni prostor. Sa opcijama kao što su prilagodljivi digitalni kodovi, daljinski upravljači i biometrijski sistem, naše sigurnosne kapije obezbjeđuju ne samo fizičku zaštitu, već i praktičnost i jednostavnu upotrebu. Investirajte u bezbijednost uz naše pouzdane sigurnosne kapije koje pružaju mir uma i sigurnost vašeg prostora!</p>
          </div>
          <div class="project-img">
            <img src="https://i.imgur.com/m8G7zTG.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projekat 9</h1>
            <h2>Alu krov</h2>
            <p>Aluminijski krov predstavlja kombinaciju vrhunskog dizajna i izdržljivosti, pružajući izuzetnu zaštitu od elemenata uz estetski privlačan izgled. Ovi krovovi se odlikuju lakoćom i otpornošću na koroziju, čineći ih savršenim izborom za dugotrajan i niskootporni krovni sistem. Sa raznim opcijama oblika i boja, naši aluminijski krovovi omogućavaju prilagođavanje arhitektonskom stilu vašeg doma ili objekta !</p>
          </div>
          <div class="project-img">
            <img src="https://i.imgur.com/trNoTyd.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projekat 10</h1>
            <h2>Podne obloge</h2>
            <p>Ponuda podnih aluminijkih obloga predstavlja elegantno i izdržljivo rješenje za unapređenje podnih površina. Ove aluminijske obloge nude modernu estetiku uz visok nivo izdržljivosti, otpornosti na habanje i jednostavnog održavanja. Sa raznovrsnim dizajnom i završnim obrascima, naše aluminijske podne obloge prilagođavaju se različitim prostorima.</p>
          </div>
          <div class="project-img">
            <img src="https://i.imgur.com/zk8jb5A.jpg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="https://i.imgur.com/BgbRV6G.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">O <span>nama</span></h1>
        <h2>Jahić Plast d.o.o</h2>
        <p>Proizvodnju Alu bravarije ,PVC stolarije i ograda firma  Jahić Plast d.o.o započela je početkom 2022.godine. 

          Radimo sa repromaterijalima već uspješnih i renomiranih kompanija kao što su: Profine, Kommerling, Winkhaus, Feal, Wurth, Reca, Urban, Termoglas.
          
          Vaša stolarija se radi po najvećim i najkvalitetnijim standardima.
          
          Mašine sa kojim radimo gotove proizvode su poznate Njemačke kompanije URBAN koja ima dugu tradiciju i iskustva sa mašinama za Alu i PVC stolariju.
          
           
          
          Jahić Plast d.o.o svojim klijentima nudi: Prozorske sisteme (Kommerling i FEAL), vrata (Kommerling i FEAL), Roletne(VariNova), širok spektar dvorišnih i stubišnih ograda, garažna vrata i mnoge druge usluge.</p>
        <a href="#" class="cta">Vratite se na početak</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Kontakt <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+1 234 123 1234</h2>
            <h2>+1 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>info@jahicplast.ba</h2>
            <h2></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Adresa</h1>
            <h2>Irac Rudarska 73, Tuzla 75000</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
 
 <?php
    require('footer.php');
 ?>