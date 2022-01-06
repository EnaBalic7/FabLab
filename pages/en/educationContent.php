
<div class="w3-main" style="margin-left:15%;margin-right:15%;">
    <!-- !PAGE CONTENT! -->

    <div id="forma" class="w3-modal">
        <!-- <div id="forma" class="w3-modal"> -->
            <div class="w3-modal-content" style="width: 30%; margin-top: 10%; border-radius: 15px; ">
                <div class="w3-container">
                    <span onclick="document.getElementById('forma').style.display='none'"
                        class="w3-button w3-display-topright" style="border-radius:0px 15px 0px 0px;">&times;</span>
                    <h4 style="color: #1d4663;"><small style="color: #1d4663;">Sign up for</small> <span
                            id="courseNameForm"></span></h4>
                    <form style="text-align: center; padding: 10px;" action="pages/en/mail.php" method="GET">
                        <input type="text" id="classroom" name="classroom" hidden><br>
                        <label for="fname">First name:</label><br>
                        <input type="text" id="fname" name="fname" placeholder="First name"><br>
                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="lname" placeholder="Last name"><br>
                        <label for="email">Email:</label><br>
                        <input type="text" id="email" name="email" placeholder="Email"><br>
                        <label for="phone">Phone:</label><br>
                        <input type="text" id="phone" name="phone" placeholder="+3876xxxxxx"><br><br>
                        <input type="submit" value="Submit" class="sub">
                        <input type="reset" value="Clear" class="clf">
                    </form>
                </div>
            </div>
        <!-- </div> -->
    </div>

    <div class="w3-container" id="ourlabs" style="margin-top:5%;">
        <h1 class="w3-xxxlarge w3-text-pastelnoplava txtCenter">Education</h1>
        <hr style="width:80%;border:3px solid #89BBDE;margin: auto;" class="w3-round">
    </div>

    <div class="edit">
        <p>
Fablab Education offers state-of-the-art equipment, facilities and lecturers from industry, universities and consultant companies with teach on subjects that are relevant today and tomorrow. We offer advanced courses, that are not commonly covered by university curriculums with II and III cycles or local STEM hubs. Those include the most recent high-tech, deep-tech, usually hands-on courses, with the focus on Good Laboratory Practice (GLP) trainings. 

            <br> <br>

            
We strive to make the courses free for everyone, and in future Fab will ensure that most of the courseware is free of charge, but meanwhile fees may apply…

            <br> <br>

        <p style="text-align: center !important;">People of all ages and expertise are welcome. </p>
        <p></p>
    </div>
</div>

<div class="filtersGroup">
    <button type="button" class="btnE activeE" onclick="ShowAll()">Show all</button>
    <button type="button" class="btnE" onclick="categoryFilter('Linux')">Linux</button>
    <button type="button" class="btnE" onclick="categoryFilter('IP')">Intellectual Property</button>
    <button type="button" class="btnE" onclick="categoryFilter('3D')">3D Print</button>
    <button type="button" class="btnE" onclick="categoryFilter('AI')">AI</button>
    <!-- </div>
        <div class="filtersGroup" style="margin-top: 15px; background-color: #e9e9e9; border-radius: 20px; padding: 5px;"> -->
    <button class="planBtn" onclick="priceFilter(0)">Free</button>
    <button class="planBtn" onclick="priceFilter(1)">Paid</button>

    <button class="btnC" onclick="levelFilter('Basic')">Basic</button>
    <button class="btnC" onclick="levelFilter('Advanced')">Advanced</button>
    <button class="btnC" onclick="levelFilter('Expert')">Expert</button>

</div>
<div class="coursesWrapper">
    <p id="noCoursesMessage">Can't find courses with this filter.</p>
</div>
<!--  </div> end of content -->

