<div class="w3-main" style="margin-left:15%;margin-right:15%;">
    <div class="w3-container centerTitle" id="Projects" style="margin-top:5%">
        <h1 class="w3-xxxlarge w3-text-red">Projekti</h1>
        <hr style="width:80%;border:3px solid red;" class="w3-round">
    </div>
    <div class="edit" align="justify">
        <p>
            FabLab se bavi različitim vrstama projekata i istraživanja, od lokalnih, nacionalnih ili međunarodnih
            projekata do komercijalnih inovacija u privatnom sektoru, istraživanja i razvoja proizvoda i usluga. Molimo
            pogledajte listu naših izuzetnih projekata.
        </p>
        <p></p>
    </div>
    <div id="signIn-container">
        <button id="signIn" onclick="OpenLoginForm()">Prijavi se</button>
        <button id="signOut">Odjavi se</button>
        <div id="UserInfo">Prijavljeni ste!</div>
    </div>
</div>
<div class="wrapper">
    <div id="special-badge">
        <button class="btn active" onclick="filterSelection('all')"> All</button>
        <button class="btn" onclick="filterSelection('in-progress')"> In progress</button>
        <button class="btn" onclick="filterSelection('0')"> 2020</button>
        <button class="btn" onclick="filterSelection('1')"> 2021</button>
        <button class="btn" onclick="filterSelection('2')"> 2022</button>
        <button class="btn" onclick="filterSelection('3')"> 2023</button>
        <button class="btn" onclick="filterSelection('Local')"> Local</button>
        <button class="btn" onclick="filterSelection('Regional')"> Regional</button>
        <button class="btn" onclick="filterSelection('EU')"> EU</button>
        <button class="btn" onclick="filterSelection('International')">International</button>
    </div>
    <div id="tags">
        <button id="all-btn" class="btn active" onclick="filterSelection('all')"> All projects</button>
        <span class="separator"></span>
        <!-- ovdje će se generirati ostali buttoni tagova -->
    </div>
</div>

<div class="row">
    <div class="tiles-wrapper">
        <div id="addProject">

            <div class="card">
                <div class="card-body">
                    <div class="card-icon">
                        <span class="plus-icon">+</span>
                    </div>
                    <h2 class="card-title">Dodaj novi projekat</h2>
                </div>
            </div>

        </div>
        
        <div class="tile in-progress Maker-Movement Distributed-Design">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> IN PROGRESS </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/Masinci%20-%20praksa.png" width="100%" alt="">
                    </div>
                    <div class="tile-body">
                        <h3>Osnivanje makers pokreta u BiH i jačanje u regionu zemalja Višegradske grupe </h3>

                        <div class="tile-tagsProjects">
                            <div class="tagProject"> Maker-Movement </div>
                            <div class="tagProject"> Distributed-Design </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP txtChangeSmaller">

                    <h6>Osnivanje makers pokreta u BiH i jačanje u regionu zemalja Višegradske grupe</h6>
                    <p> Projekat će uspostaviti makers pokret u BiH i poticati jačanje u regionu zemalja Višegradske
                        grupe. Novo partnerstvo između FabLab-ova iz Češke, Mađarske, Poljske, Slovačke i BiH će
                        podržati razmjenu znanja, ideja i dobrih praksi. U partnerstvu sa drugim proizvođačima i
                        preduzećima, FabLab-ovi će, kroz makers pokret, poticati popularizaciju nauke, čak i u teško
                        dostupnim zajednicama.
                    </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://www.facebook.com/FabLabSarajevo/videos/606809733622872"
                                target="_blank">Detaljnije</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile 1 Local Culture">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> 2021 </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/3D%20print%20i%20kultura.png" width="100%"
                            alt="">
                    </div>
                    <div class="tile-body">
                        <h3>Susret 3D printanja i kulture: „Prošlost susreće budućnost“</h3>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> Local </div>
                            <div class="tagProject"> Culture </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h3>Susret 3D printanja i kulture: „Prošlost susreće budućnost“ </h3>
                    <p> Cilj projekata je utvrđivanje kapaciteta, ispitivanje postojećeg stanja, prikaz aktuelnih
                        tehnoloških rješenja i izrada studije izvodljivosti za sarajevske muzeje i institucije kulture.
                    </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://mks.ks.gov.ba/aktuelno/obavjestenja/spisak-odobrenih-sredstava-iz-oblasti-kulture-0"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile in-progress International Collaboration ">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> IN PROGRESS </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img
                            src="../../slike/proj/3D%20tech%20in%20medicine%20and%20health-care.png" width="100%"
                            alt="">
                    </div>
                    <div class="tile-body">
                        <h3>Optimizacija i korištenje 3D tehnologije u medicini i zdravstvu – učenje na iskustvu </h3>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> International </div>
                            <div class="tagProject"> Collaboration </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h3>Optimizacija i korištenje 3D tehnologije u medicini i zdravstvu – učenje na iskustvu</h3>
                    <p> Projekat finansira CEI sa ciljem razvoja i jačanja kompetencija vezanih za 3D tehnologiju u
                        medicini i zdravstvu. Učesnici: Univerzitet u Zenici, Univerzitet Pavia, Politecnico iz Torina i
                        FabLab BiH</p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="http://www.mef.ues.rs.ba/poziv-za-ucesce-u-radionicama-u-sklopu-projekta-optimization-and-usage-of-3d-technology-in-medicine-and-health-care-learn-on-experience/?script=lat"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile  1 STEM FabXUni">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> 2021 </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/Trening%20pharma.png" width="100%" alt="">
                    </div>
                    <div class="tile-body">
                        <h3>Obuka iz aditivne proizvodnje za univerzitetsko osoblje</h3>

                        <div class="tile-tagsProjects">
                            <div class="tagProject"> STEM </div>
                            <div class="tagProject"> FabXUni </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h3>Obuka iz aditivne proizvodnje za univerzitetsko osoblje</h3>
                    <p> FabLab je organizovao obuku iz osnova 3D printanja i aditivne proizvodnje za osoblje
                        Farmaceutskog fakulteta. Polaznici su stekli praktična znanja o 3D printanju i njegovoj primjeni
                        u farmaceutskoj industriji. 3D štampanje lijekova moglo bi postati najveći tehnološki iskorak u
                        farmaceutskom segmentu, a prema optimističnim prognozama uskoro će biti dostupno i u BiH.
                    </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://www.facebook.com/FabLabSarajevo/posts/538988210875117"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile  1 Local FabXUni">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> 2021 </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/Masinci%20-%20praksa.png" width="100%" alt="">
                    </div>
                    <div class="tile-body">
                        <h3>Mašinstvo </h3>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> FabXUni </div>
                            <div class="tagProject"> Local </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP txtChangeSmaller">
                    <h1 class="smallerTitle">Mašinstvo</h1>
                    <p>
                        Mašinski fakultet Sarajevo, u saradnji sa FabLab-om, organizovao je stažiranje za 10 studenata
                        III i IV godine studija. Tokom stažiranja studenti su radili na različitim kreativnim projektima
                        3D printanja: - Ultrazvučni čistač četkica za zube - Hidrodinamički transformator - Alat za
                        stezanje posebne namjene - Lagani okvir za dronove. </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://www.facebook.com/FabLabSarajevo/videos/606809733622872/"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile  1 FabXUni International">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> 2021 </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/3D%20printanje%20u%20farmaciji.png" width="100%"
                            alt="">
                    </div>
                    <div class="tile-body"> <a
                            href="https://www.ffsa.unsa.ba/post/zavr%C5%A1ena-radionica-3d-printanje-u-farmaciji"
                            target="_blank">
                            <h1>3D printanje u farmaciji</h1>
                        </a>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> International </div>
                            <div class="tagProject"> FabXUni </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <a href="https://www.ffsa.unsa.ba/post/zavr%C5%A1ena-radionica-3d-printanje-u-farmaciji"
                        target="_blank">
                        <h1 class="smallerTitle">3D printanje u farmaciji</h1>
                    </a>
                    <p> „3D printanje u farmaciji“ nastala je na osnovu saradnje sa Farmaceutskim fakultetom u Sarajevu,
                        Farmaceutskim fakultetom u Beogradu i kompanijom Hemofarm. Cilj projekta je bio da se kroz
                        dvodnevnu obuku i konferenciju predstavi novo interdisciplinarno polje, njegova primjena, ali i
                        izazovi.</p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://www.ffsa.unsa.ba/post/zavr%C5%A1ena-radionica-3d-printanje-u-farmaciji"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile  in-progress International Empowerment">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> In progress </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/w3.png" width="100%" alt="">
                    </div>
                    <div class="tile-body"> <a
                            href="https://womenin3dprinting.com/events/sarajevo-chapter/?sd=1589303340&ed=2535988140"
                            target="_blank">
                            <h1>Žene u 3D printanju</h1>
                        </a>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> International </div>
                            <div class="tagProject"> Empowerment </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">

                    <h3>Žene u 3D printanju</h3>

                    <p>
                        Kako bi se što više žena zainteresiralo i uključilo u oblast aditivne proizvodnje, u Sarajevu je
                        osnovana podružnica globalne mreže
                        <a href="https://womenin3dprinting.com/about-us/">'Žene u 3D printanju'</a>.
                        <br>Organizujemo redovne događaje sa gostujućim predavačima i vodećim stručnjacima iz cijelog
                        svijeta.
                        <br>Informacije o novim događajima možete saznati putem naše web stranice ili društvenih mreža.

                    </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://womenin3dprinting.com/about-us/" target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile  0 Local STEM">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> 2020 </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/3D%20skener.png" width="100%" alt="">
                    </div>
                    <div class="tile-body">
                        <h3>Poboljšanje STEM obrazovanja 3D skeniranjem</h3>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> Local </div>
                            <div class="tagProject"> STEM </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h3>Poboljšanje STEM obrazovanja 3D skeniranjem</h3>
                    <p> Projekat „Unapređenje STEM obrazovanja 3D skeniranjem“ podržava Federalno ministarstvo razvoja,
                        poduzetništva i obrta FBiH. Cilj projekta je jačanje kapaciteta FabLab-a kroz nabavku 3D skenera
                        s ciljem uspostavljanja inkluzivne STEM edukacije i osposobljavanja mladih za rad na aditivnim
                        tehnologijama, uključujući projektnu opremu. </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://www.facebook.com/FabLabSarajevo/posts/439416167498989?__tn__=-R"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile in-progress Innovation IP Prototyping">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> In progress </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/Fishing%20(2).png" width="100%" alt="">
                    </div>
                    <div class="tile-body"> <a href="#" target="_blank">
                            <h3>Projekat Visokotehnološki ribolovni sistem</h3>
                        </a>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> Innovation </div>
                            <div class="tagProject"> IP </div>
                            <div class="tagProject"> Prototyping </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h3>Projekat Visokotehnološki ribolovni sistem</h3>
                    <p> Ribarstvo predstavlja izuzetno važan izvor hrane i egzistencije za milijarde širom svijeta.
                        Tehnološke inovacije zajedno s najboljim IPR praksama predstavljaju velike mogućnosti u
                        promovisanju zdravih ribljih populacija, prehrani milijardi ljudi, a istovremeno se
                        prilagođavaju utjecajima klimatskih promjena. Patentirano. </p>

                </div>
            </div>
        </div>

        <div class="tile in-progress IP Prototyping">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> In progress </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/Spectrometer.png" width="100%" alt="">
                    </div>
                    <div class="tile-body"> <a href="#" target="_blank">
                            <h1>Projektni spektrometar</h1>
                        </a>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> IP </div>
                            <div class="tagProject"> Prototyping </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h1>Projektni spektrometar</h1>
                    <p> Spektrometar je uređaj koji razlaže ulazno svjetlo na njegove sastavne boje i iste kvantificira.
                        Vrlo je koristan instrument u naučnim laboratorijama i odličan obrazovni alat za hemiju,
                        biologiju ili fiziku svjetlosti. FabLab Sarajevo je razvio spektrometar spojen na vlakna i držač
                        kivete koji čine provođenje eksperimenata lakim i ponovljivim.</p>

                </div>
            </div>
        </div>


        <div class="tile in-progress IP Prototyping ">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> In progress </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/Pulse%20oximeter.png" width="100%" alt="">
                    </div>
                    <div class="tile-body"> <a href="#" target="_blank">
                            <h1> Pulsni oksimetar </h1>
                        </a>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> IP </div>
                            <div class="tagProject"> Prototyping </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h1>Pulsni oksimetar</h1>
                    <p> Pomogli smo u proizvodnji, izmjenama dizajna i konačnom dizajnu prvog prijenosnog pulsnog
                        oksimetra proizvedenog u Bosni i Hercegovini. Prijenosni pulsni oksimetar je mali, brz,
                        neinvazivan i lagan uređaj koji se koristi za praćenje količine kisika u tijelu. Proizvod čeka
                        patentiranje, a dodatni detalji će biti dostupni kada proizvod bude patentiran. </p>

                </div>
            </div>
        </div>

        <div class="tile  in-progress IP Prototyping">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> In progress </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/medicinsko%20pomagalo.png" width="100%" alt="">
                    </div>
                    <div class="tile-body"> <a href="#" target="_blank">
                            <h2>Aktivni medicinski instrument</h2>
                        </a>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> IP </div>
                            <div class="tagProject"> Prototyping </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h1>Aktivni medicinski instrument</h1>
                    <p> Pomogli smo u izradi, izmjenama dizajna i konačnom dizajnu prilagođenog ortopedskog aktivnog
                        medicinskog instrumenta. Proizvod čeka patentiranje, a dodatni detalji će biti dostupni kada
                        proizvod bude patentiran.</p>

                </div>
            </div>
        </div>


        <div class="tile  in-progress Craft Entrepreneurship">
            <!--ovo je flip-card -->
            <div class="special-badge">
                <div style="display: flex;"> <span> In progress </span>
                </div>
            </div>
            <div class="flip-card-innerP">
                <div class="flip-card-frontP">
                    <div class="tile-image"> <img src="../../slike/proj/Cake%20molds.png" width="100%" alt="">
                    </div>
                    <div class="tile-body"> <a href="#" target="_blank">
                            <h1> Kalupi i ukrasi za torte … </h1>
                        </a>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> Entrepreneurship </div>
                            <div class="tagProject"> Craft </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h3> Kalupi i ukrasi za torte, nakit, predmeti za odlaganje, kancelarijski materijal, pametni
                        uređaji,…</h3>
                    <p> Visoka cijena, tehničke poteškoće u izradi prototipova proizvoda i nedostatak vještina ili
                        znanja, dugo su bili prepreka za mala i srednja preduzeća i startup-e koji žele da uvedu
                        inovacije, unesu nove ideje na tržište ili da se takmiče s drugima. FabLab je prepoznao ovaj
                        problem pa je, značajno pojednostavljujući proces razvoja prototipa ili proizvoda, stavio
                        digitalnu proizvodnju u finansijski domet malih i srednjih preduzeća i startup-a, ili čak za
                        zaposlene sa punim radnim vremenom koji pokušavaju da istraže alternativnu karijeru. </p>

                </div>
            </div>

        </div>

        <!-- Ovdje pocinje popup forma -->


    </div>
    <div class="popup-container">
        <div class="popup-content">
            <h3>Dodaj novi projekat</h3>
            <form id="form-input">
                <label for="file-upload">Odaberi JPEG, PNG, ili GIF file:</label>
                <input type="file" id="file-upload" name="file-upload" accept="image/jpeg,image/png,image/gif">
                <div class='imagePreview'></div>
                <label for="title">Naslov prednje strane kartice</label>
                <input id="title-input" type="text" name="title" placeholder="Tvoj naslov..">
                <label for="category">Naslov stražnje strane kartice (duži)</label>
                <input id="subtitle-input" type="text" name="subtitle" placeholder="Tvoj podnaslov..">
                <label for="description">Opis projekta stražnje strane kartice</label>
                <textarea id="text-input" name="description" placeholder="Napiši nešto.."
                    style="height:200px"></textarea>
                <label for="category">Regije</label>
                <select id="category-select" name="category">
                    <option value="Lokalno">Lokalno</option>
                    <option value="Regionalno">Regionalno</option>
                    <option value="EU">EU</option>
                    <option value="Internationalno">Međunarodno</option>
                </select>
                <label for="tags">Oznake (oznaka1,oznaka2,oznaka3)</label>
                <input type="text" id="tags-input" name="tags" placeholder="Tvoji tagovi..">
                <label for="category">Godina projekta (ili U tijeku)</label>
                <input id="special-badge-input" type="text" name="special-badge" placeholder="Tvoj status projekta..">
                <label for="hyperlink">Pročitajte više link</label>
                <input id="hyperlink-input" type="url" name="hyperlink" placeholder="https://www.example.com">
            </form>
            <div class="popup-buttons">
                <button type="submit" class="submitBtn">Dodaj</button>
                <button type="button" class="closeBtn">Zatvori</button>
            </div>
        </div>
    </div>
    <div class="popup-container" id="form-login">
        <div class="popup-content">
            <h3>Prijavi se</h3>
            <form>
                <label for="email">Email</label>
                <input id="email-input" type="text" name="email" placeholder="Tvoj email..">
                <label for="password">Lozinka</label>
                <input id="password-input" type="password" name="password" placeholder="Tvoja lozinka..">
            </form>
            <div class="popup-buttons">
                <button type="submit" class="submitLogin">Prijavi se</button>

                <button type="button" class="closeLogin" onclick="CloseLoginForm()">Zatvori</button>
            </div>
        </div>
    </div>
</div>