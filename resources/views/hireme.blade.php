<!DOCTYPE html>
<html>

<head>
    <title>HIRE ME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div id="wrapper">

        @include ('navbar');
        <div class="column maincontent">
            <header class="heading">
                <div class="sideLine"></div>
                <div class="headingText">
                    <h3>HIRE ME</h3>
                </div>
                <div class="sideLine"></div>
            </header>
            <section class="hireMeContent">

                <div class="section">
                    <div class='subsection'>
                        <img src='./Images/HireMe/car1.png' />
                        <p>{{ $level1Cost }}</p>
                        @foreach ($level1 as $job)
                        <p>{{ $job -> job_description}}</p>
                        @endforeach
                        <hr />
                        <a href='/contact'><button name='Contact US'>Contact US</button></a>
                    </div>

                    <div class='subsection'>
                        <img src='./Images/HireMe/car2.png' />
                        <p>{{ $level2Cost }}</p>
                        @foreach ($level2 as $job)
                        <p>{{ $job -> job_description}}</p>
                        @endforeach
                        <hr />
                        <a href='/contact'><button name='Contact US'>Contact US</button></a>
                    </div>

                    <div class='subsection'>
                        <img src='./Images/HireMe/car3.png' />
                        <p>{{ $level3Cost }}</p>
                        @foreach ($level3 as $job)
                        <p>{{ $job -> job_description}}</p>
                        @endforeach
                        <hr />
                        <a href='/contact'><button name='Contact US'>Contact US</button></a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>