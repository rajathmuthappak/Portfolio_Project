<!DOCTYPE html>
<html>

<head>
    <link href="css/portfolio.css" rel="stylesheet">
    <script src="scripts/portfolio.js"></script>
    <style>
        .log-in-form-popup {
            display: none;
            position: fixed;
            z-index: 9;
            left: 35%;
        }

        .sign-up-form-popup {
            display: none;
            position: fixed;
            z-index: 9;
        }
    </style>
</head>

<body>
    <div class="column navbar">
        <ul>
            <img src="./Images/NavBar/logo.jpg" alt="logo" />
            <img id="nameImage" src="./Images/NavBar/cooltext338387314978571.png" alt="name" />
            <li><a href="/home">HOME</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/skills">SKILLS</a></li>
            <li><a href="/resume">RESUMES</a></li>
            <li><a href="/references">REFERENCES</a></li>
            <li><a href="/blogs">BLOGS</a></li>
            <li><a href="/portfolio">PORTFOLIO</a></li>
            <li><a href="/hireme">HIRE ME</a></li>
            @if (Session::has('user_id'))
            <li><a href="/logout" onclick="return logOutAlert()">Log Out</a></li>
            @else
            <li><a onclick="openLogInForm()">LOG IN</a></li>
            <li><a onclick="openSignUpForm()">SIGN UP</a></li>
            @endif
        </ul>
        <footer class="copyright">
            <label>@DiazApps ALL RIGHTS RESERVED BY</label><br />
            <label>Rajath Muthappa K</label>
        </footer>
    </div>
    <div class="log-in-form-popup" id="logInForm">
        <div class="logInMainContent">
            <form method='post' name='logInForms' id='logInForms' action='login' onsubmit="return logInValidation()">
                {{ @csrf_field() }}
                <h1>Login</h1>
                <hr>
                <label for="uname"><b>User</b></label>
                <input type="text" name="uname" id="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="Password" name="password" id="Password" required>
                <input type='hidden' name='formValue' value='holla'>

                <div class="logInButtons">
                    <button type="button" onclick="closeLogInForm()">Close</button>
                    <button type="submit">Get in</button>
                </div>
            </form>
        </div>
    </div>

    <div class="sign-up-form-popup" id="signUpForm">
        <div class="signUpMainContent">
            <form method="post" name='signUpForm' id="signUpForms" action="/signUp" onsubmit="return signUpFormValidation()">
                {{ @csrf_field() }}
                <h1>Check in</h1>
                <hr>
                <label for="name"><b>Name</b></label>
                <input type="text" name="name" id="name" required>

                <label for="lName"><b>Last Name</b></label>
                <input type="text" id="lName" name="lName" required>

                <label for="email"><b>Email</b></label>
                <input type="text" id="email" name="email" required>

                <label for="user"><b>User</b></label>
                <input type="text" id="user" name="user" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" id="password" name="password" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" id="password-repeat" name="password-repeat" required>

                <div class="signUpButtons">
                    <button type="button" onclick="closeSignUpForm()">close</button>
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>