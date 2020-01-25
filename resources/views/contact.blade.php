<!DOCTYPE html>
<HTML>

<head>
    <title>ABOUT ME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="scripts/portfolio.js"></script>
</head>

<body>
    <div id="wrapper">

        @include ('navbar');
        @include ('database');

        <div class="column maincontent">
            <header class="heading">
                <div class="sideLine"></div>
                <div class="headingText">
                    <h3>CONTACT ME</h3>
                </div>
                <div class="sideLine"></div>
            </header>
            <section class="contactMeMainContent">
                <div class="contactme_row">
                    <div class="contactme_column">
                        <h2>Contact Address</h2>
                        <table>
                            <tr>
                                <td><i class="fas fa-street-view"></i> Address</td>
                                <td>: {{$address}}</td>
                            </tr>
                            <tr>
                            <tr>
                                <td><i class="fas fa-mobile-alt"></i> Phone</td>
                                <td>: {{ $phone }}</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-whatsapp"></i> Whatsapp</td>
                                <td>: {{ $whatsapp }} </td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-skype"></i> Skype</td>
                                <td>: {{ $skype }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-envelope-open-text"></i> Email</td>
                                <td>: {{ $email }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-home"></i> Website</td>
                                <td>: {{ $website }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><img src="./Images/ContactMe/allMedia.JPG" /></td>
                            </tr>
                        </table>
                    </div>
                    <div class="contactme_column">
                        <h2>Lets have fun</h2>
                        <form method="POST" onsubmit="return contactMeValidateInput()" id="contactMe" action="sendmail">
                        {{ csrf_field() }}
                            <input type="text" placeholder="Your name" id="name" name="name" required>
                            <input type="text" placeholder="email" name="emailContact" id="emailContact" required>
                            <input type="text" placeholder="Phone" name="phone" id="phone" required>
                            <textarea name="msg" rows="4" cols="50" placeholder="Your Message" name="msg" required></textarea>
                            <button type="submit">Send Details</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</HTML>