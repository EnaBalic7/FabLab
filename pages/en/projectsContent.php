<div class="w3-main" style="margin-left:15%;margin-right:15%;">
    <div class="w3-container centerTitle" id="Projects" style="margin-top:5%">
        <h1 class="w3-xxxlarge w3-text-red">Projects</h1>
        <hr style="width:80%;border:3px solid red;" class="w3-round">
    </div>
    <div class="edit" align="justify">
        <p>
            FabLab is engaged on various types of the projects and research, from local community, national or
            international projects to commercial, private sector innovation, research and development for products and
            services. Please check out list of our exemplary projects.
        </p>
        <p></p>
    </div>
</div>

<div id="signIn-container">
    <button id="signIn" onclick="OpenLoginForm()">Sign in</button>
    <button id="signOut">Sign out</button>
    <div id="UserInfo">You are signed in!</div>
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
    <div class="tiles-wrapper ">
        <div id="addProject">

            <div class="card">
                <div class="card-body">
                    <div class="card-icon">
                        <span class="plus-icon">+</span>
                    </div>
                    <h2 class="card-title">Add New Project</h2>
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
                        <h3>Maker Movement Establishing in BiH and Strengthening in the Visegrad Region </h3>

                        <div class="tile-tagsProjects">
                            <div class="tagProject"> Maker-Movement </div>
                            <div class="tagProject"> Distributed-Design </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP txtChangeSmaller">

                    <h6>Maker Movement Establishing in BiH and Strengthening in the Visegrad Region</h6>
                    <p> The Project will establish a maker movement in BiH and foster strentenigh in Visegrad region.
                        Thee new partnership among FabLabs from Czech Republic, Hungary, Poland and Slovakia and BiH
                        will support sharing know-how, ideas and good practices. Partnering with other makers and
                        businesses, FabLabs will, through the maker movement, encourage science popularization, even in
                        hard-to-reach communities.
                    </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://www.facebook.com/FabLabSarajevo/videos/606809733622872"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile 1 Local Culture ">
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
                        <h3>3D printing meets culture: “Past Meets Future”</h3>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> Local </div>
                            <div class="tagProject"> Culture </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h3>3D printing meets culture: “Past Meets Future” </h3>
                    <p> Aim of the projects is to determine capacity, survey current situation, display current
                        technology solutions and create feasibility study for Sarajevo museums and institutes of
                        culture.. </p>
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
                        <h3>Optimization and usage of 3D technology in medicine and health care - learn on
                            experience </h3>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> International </div>
                            <div class="tagProject"> Collaboration </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h3>Optimization and usage of 3D technology in medicine and health care-learn
                        on experience</h3>
                    <p> CEI funded project with aim to develop and strengthen the competences related to 3D technology
                        in medicine and health care. Participants: University of Zenica, University of Pavia,
                        Politecnico of Torino and FabLab BiH </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="http://www.mef.ues.rs.ba/poziv-za-ucesce-u-radionicama-u-sklopu-projekta-optimization-and-usage-of-3d-technology-in-medicine-and-health-care-learn-on-experience/?script=lat"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile 1 STEM FabXUni">
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
                        <h3>AM Training for University </h3>

                        <div class="tile-tagsProjects">
                            <div class="tagProject"> STEM </div>
                            <div class="tagProject"> FabXUni </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h3>AM Training for University</h3>
                    <p> FabLab organized a training in the basics of 3D printing and AM for Faculty of Pharmacy staff.
                        Attendees gained practical knowledge of 3D printing and its application in the pharmaceutical
                        industry. 3D drug printing may become the biggest technological leap in the pharmaceutical
                        segment, and according to the optimistic forecasts, it will soon be available in BiH as well.
                    </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://www.facebook.com/FabLabSarajevo/posts/538988210875117"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile 1 Local FabXUni">
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
                        <h3>Internship - Faculty of Mechanical Engineering </h3>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> FabXUni </div>
                            <div class="tagProject"> Local </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP txtChangeSmaller">
                    <h1 class="smallerTitle">Internship - Faculty of Mechanical Engineering</h1>
                    <p>

                        Faculty of Mechanical Engineering Sarajevo, in cooperation with FabLab, organized an internship
                        for 10 students of III and IV year of study. During the internship, students worked on the
                        various creative 3D printing projects: - Ultrasonic toothbrush cleaner - Hydrodynamic
                        transformer - Special purpose clamping tool - Lightweight frame for drones. </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://www.facebook.com/FabLabSarajevo/videos/606809733622872/"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile 1 International FabXUni">
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
                            <h1>3D printing in pharmacy</h1>
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
                        <h1 class="smallerTitle">3D printing in pharmacy</h1>
                    </a>
                    <p> '3D printing in pharmacy' was established based on cooperation with the Faculty of Pharmacy in
                        Sarajevo, the Faculty of Pharmacy in Belgrade and Hemofarm company. The aim of the project was
                        to present new interdislinary field, its applications, but also the challenges through a two-day
                        training and confrence. </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://www.ffsa.unsa.ba/post/zavr%C5%A1ena-radionica-3d-printanje-u-farmaciji"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile in-progress International Empowerment">
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
                            <h1>Women in 3D printing</h1>
                        </a>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> International </div>
                            <div class="tagProject"> Empowerment </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">

                    <h3>Women in 3D printing</h3>

                    <p>
                        To make as many women become interested and involved in the field of additive production, a
                        branch of the global network <a href="https://womenin3dprinting.com/about-us/">'Women in 3D
                            Printing'</a> has been established in Sarajevo.
                        <br>We organize regular events with guest lecturers and leading experts from around the world.
                        <br>You can find out information about new events via our website or social networks.

                    </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://womenin3dprinting.com/about-us/" target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile 0 Local STEM">
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
                        <h3>Improving STEM Education with 3D Scanning</h3>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> Local </div>
                            <div class="tagProject"> STEM </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h3>Improving STEM Education with 3D Scanning</h3>
                    <p> The project ‘Improving STEM Education with 3D Scanning’ is supported by the Federal Ministry of
                        Development, Entrepreneurship and Crafts. The aim of the project is to strengthen the capacity
                        of FabLab through the procurement of 3D scanners with the aim of establishing inclusive STEM
                        education and training of young people to work on additive technologies, including project
                        equipment. </p>
                    <div class="tile-tagsProjects">
                        <div class="tagProject dugmence mob" style="background-color:white;color:black"> <a
                                href="https://www.facebook.com/FabLabSarajevo/posts/439416167498989?__tn__=-R"
                                target="_blank">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile in-progress IP Prototyping Innovation">
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
                            <h3> Project High-tech fishing system </h3>
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
                    <h3>Project High-tech fishing system</h3>
                    <p> Fisheries represent a very important source of food for billions and livelihoods for millions of
                        people worldwide. Technological innovations together with IPR best practices present great
                        opportunities in promoting healthy fish populations, feeding billions of people, and at the same
                        time adapting to the impacts of climate changes. Patented. </p>

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
                            <h1> Project Spectrometer </h1>
                        </a>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> IP </div>
                            <div class="tagProject"> Prototyping </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h1>Project Spectrometer</h1>
                    <p> The spectrometer is a device that resolves the input light on its constituent colors and
                        quantifies them. It is a very useful instrument in science laboratories and an excellent
                        educational tool for chemistry, biology, or physics of light. FabLab Sarajevo has developed a
                        fiber-coupled spectrometer and a cuvette holder that make the conduction of experiments easy and
                        repeatable. </p>

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
                    <div class="tile-image"> <img src="../../slike/proj/Pulse%20oximeter.png" width="100%" alt="">
                    </div>
                    <div class="tile-body"> <a href="#" target="_blank">
                            <h1> Pulse oximeter </h1>
                        </a>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> IP </div>
                            <div class="tagProject"> Prototyping </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h1>Pulse oximeter</h1>
                    <p> We have assisted in fabrication, design changes and final design
                        of the first portable pulse oximeter produced in Bosnia. Portable
                        pulse oximeter is a small, rapid, noninvasive, and lightweight device
                        used to monitor the amount of oxygen carried in the body. Product
                        is patent pending and further detail will be available once product
                        is patented. </p>

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
                    <div class="tile-image"> <img src="../../slike/proj/medicinsko%20pomagalo.png" width="100%" alt="">
                    </div>
                    <div class="tile-body"> <a href="#" target="_blank">
                            <h2> Active medical instrument </h2>
                        </a>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> IP </div>
                            <div class="tagProject"> Prototyping </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h1> Active medical instrument </h1>
                    <p> We have assisted in fabrication, design changes and final design of the custom orthopedic active
                        medical instrument. Product is patent pending and further detail will be available once product
                        is patented. </p>

                </div>
            </div>
        </div>


        <div class="tile in-progress Craft Entrepreneurship">
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
                            <h1> Cake molds and … </h1>
                        </a>
                        <div class="tile-tagsProjects">
                            <div class="tagProject"> Entrepreneurship </div>
                            <div class="tagProject"> Craft </div>
                        </div>
                    </div>
                </div>
                <!--end of flip-inner -->
                <div class="flip-card-backP">
                    <h3> Cake molds and decorations, jewellery, storage items, office supplies, gadgets, …</h3>
                    <p> The high cost, technical difficulty of making product prototypes,
                        and lack of skills or knowledge, have long been roadblocks for SMEs
                        and startups seeking to innovate, bring new ideas to market or to
                        compete with others. FabLab recognized this problem and has put digital
                        fabrication within financial reach of SMEs and startups, or even for
                        full-time jobers trying to explore an alternative career, significantly
                        simplifying the process of prototype or product development. </p>

                </div>
            </div>
        </div>
    </div>

    <!-- Ovdje pocinje popup forma -->
    <div class="popup-container">
        <div class="popup-content">
            <h3>Add New Project</h3>
            <form id="form-input">
                <!-- <label for="file-upload">Select a JPEG, PNG, or GIF file:</label>
                    <input type="file" id="file-upload" name="file-upload" accept="image/jpeg,image/png,image/gif"> -->

                <label for="file-upload">Select a JPEG, PNG, or GIF file:</label>
                <input type="file" id="file-upload" name="file-upload" accept="image/jpeg,image/png,image/gif">
                <div class='imagePreview'></div>
                <label for="title">Front Card Header</label>
                <input id="title-input" type="text" name="title" placeholder="Your title..">
                <label for="category"> Back Card Header (longer)</label>
                <input id="subtitle-input" type="text" name="subtitle" placeholder="Your subtitle..">
                <label for="description">Back Card project description</label>
                <textarea id="text-input" name="description" placeholder="Write something.."
                    style="height:200px"></textarea>
                <label for="category">Regions</label>
                <select id="category-select" name="category">
                    <option value="Local">Local</option>
                    <option value="Regional">Regional</option>
                    <option value="EU">EU</option>
                    <option value="International">International</option>
                </select>
                <label for="tags">Tags (tag1,tag2,tag3)</label>
                <input type="text" id="tags-input" name="tags" placeholder="Your tags..">
                <label for="category">Project Year (or In Progress)</label>
                <input id="special-badge-input" type="text" name="special-badge" placeholder="Your project year..">
                <label for="hyperlink">Read More link</label>
                <input id="hyperlink-input" type="url" name="hyperlink" placeholder="https://www.example.com">
            </form>
            <div class="popup-buttons">
                <button type="submit" class="submitBtn">Submit</button>

                <button type="button" class="closeBtn">Close</button>
            </div>
        </div>
    </div>
    <div class="popup-container" id="form-login">
        <div class="popup-content">
            <h3>Sign in</h3>
            <form>
                <label for="email">Email</label>
                <input id="email-input" type="text" name="email" placeholder="Your email..">
                <label for="password">Password</label>
                <input id="password-input" type="password" name="password" placeholder="Your password..">
            </form>
            <div class="popup-buttons">
                <button type="submit" class="submitLogin">Sign in</button>

                <button type="button" class="closeLogin" onclick="CloseLoginForm()">Close</button>
            </div>
        </div>
    </div>
</div>