<!DOCTYPE html>
<HTML>

<head>
    <title>Resumes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div id="wrapper">
        @include ('navbar');
        <div class="column maincontent">
            <header class="heading">
                <div class="sideLine"></div>
                <div class="headingText">
                    <h3>RESUMES</h3>
                </div>
                <div class="sideLine"></div>
            </header>
            <div class='resumeContent'>"
                @php ($counter = 1)
                @foreach($resumes as $resume)
                @php ($className = $counter % 2 == 1 ? 'resume' : 'resume right')
                <div class='{{ $className }}'>
                    <div class='event'>
                        <h3>{{$resume->year}}</h3>
                        <p class='text'>{{$resume->company . ' - ' . $resume->designation}}</p><br />
                        <p class='text'>{{$resume->responsibilities}}</p>
                    </div>
                </div>
                @php (++$counter)
                @endforeach
            </div>
        </div>
</body>

</HTML>