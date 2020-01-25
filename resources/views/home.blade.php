<!DOCTYPE html>
<HTML>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="wrapper">
        @include ('navbar');
        @include ('database');

        <div class="column maincontent">
            <section class='homeMainContent'>

                @if (! Session::has('user_id'))
                <h2>HELLO</h2>
                <h1> Please Log-in to view contents </h1>
                @else
                @isset($username)
                @if ($username === 'admin')
                <h2>HELLO Rajath,</h2>
                <h4>Click the below button to view/download the resume OR <a href='/edit'>click here</a> to edit details</h4>
                <button type='button' name='Download'><a href='./Resumes/Rajath Muthappa K.pdf' target='_blank'>Download Resume <i class='fa fa-download' aria-hidden='true'></i></a></button>
                @else
                <h3>HELLO, I'm</h3>
                <h1>Rajath Muthappa K.</h1>
                <h4>Software Engineer</h4>
                <button type='button' name='Download'><a href='./Resumes/Rajath Muthappa K.pdf' target='_blank'>Download Resume <i class='fa fa-download' aria-hidden='true'></i></a></button>
                @endif
                @endisset
                @endif
                @isset($errorMsg)
                <h3 style='color:white; text-align: centre;'>Login Failed! Enter Valid User ID and password and try again..!!</h3>
                <h3 style='color:white; text-align: centre;'>Sign Up if new user..!</h3>
                @endisset
            </section>
        </div>
    </div>
</body>

</HTML>