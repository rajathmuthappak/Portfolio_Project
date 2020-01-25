<!DOCTYPE html>
<HTML>

<head>
    <title>ABOUT ME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/all.css">
</head>

<body>

    @include ('navbar')
    <div id="wrapper">

        <div class="column maincontent">
            <div class="aboutMeMainContent">
                <header class="heading">
                    <div class="sideLine"></div>
                    <div class="headingText">
                        <h3>ABOUT ME</h3>
                    </div>
                    <div class="sideLine"></div>
                </header>
                <section class="aboutMeSplitScreen">
                    <div class="imageColumn">
                        <img src="./Images/AboutMe/Rajath.jpg" />
                        <br />
                        <p>{{ $designation }}</p>
                    </div>
                    <div class="descriptionColumn">
                        <div class="gridsforContactInfo">
                            <div class="gridInfo">
                                <div class="grid1"><i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                                <div class="grid2">
                                    <p>Name</p>
                                </div>
                                <div class="grid3">
                                    <p>{{ $name }}</p>
                                </div>
                            </div>
                            <div class="gridInfo">
                                <div class="grid1"><i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="grid2">
                                    <p>Email</p>
                                </div>
                                <div class="grid3">
                                    <p>{{ $email_id }}</p>
                                </div>
                            </div>
                            <div class="gridInfo">
                                <div class="grid1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="grid2">
                                    <p>Phone</p>
                                </div>
                                <div class="grid3">
                                    <p>{{ $phone }}</p>
                                </div>
                            </div>
                            <div class="gridInfo">
                                <div class="grid1"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                                <div class="grid2">
                                    <p>Date Of Birth</p>
                                </div>
                                <div class="grid3">
                                    <p>{{ $dob }}</p>
                                </div>
                            </div>
                            <div class="gridInfo">
                                <div class="grid1"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="grid2">
                                    <p>Address</p>
                                </div>
                                <div class="grid3">
                                    <p>{{ $address_line1.$address_line2}}</p>
                                </div>
                            </div>
                            <div class="gridInfo">
                                <div class="grid1"><i class="fa fa-flag" aria-hidden="true"></i></div>
                                <div class="grid2">
                                    <p>Nationality</p>
                                </div>
                                <div class="grid3">
                                    <p>{{ $nationality }}</p>
                                </div>
                            </div>
                            <div class="gridInfo">
                                <div class="grid4"><img src="./Images/AboutMe/7.JPG" alt="Name" /></div>
                            </div>
                        </div>
                        <div class="fullDescription">
                            <p>{{ $description }}</p>
                            <p>Yours Sincerely,</p>
                            <img src="./Images/AboutMe/Signature.jpg" />
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</HTML>