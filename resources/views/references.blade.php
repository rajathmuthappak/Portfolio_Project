<!DOCTYPE html>
<HTML>

<head>
    <title>References</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    @include ('navbar');
    <div class="column maincontent">
        <header class="heading">
            <div class="sideLine"></div>
            <div class="headingText">
                <h3>REFERENCES</h3>
            </div>
            <div class="sideLine"></div>
        </header>
        <section class="referencesMainContent">
            <div class='references'>
                @foreach ($referrences as $reference)
                <div class='reference'>
                    <img src='{{ $reference->image_location }}' />
                    <p>{{ $reference->referrer }}</p>
                    <p>{{$reference->referrer_designation}}</p>
                    <p>{{$reference->reference}}</p>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</body>

</HTML>