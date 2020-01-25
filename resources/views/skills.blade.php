<!DOCTYPE html>
<HTML>

<head>
    <title>Skills</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container {
            width: 100%;
            background-color: #ddd;
        }

        .skills {
            text-align: right;
            color: white;
            font-size: 0.8vw;
        }

        p {
            font-size: 0.9vw;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        @include ('navbar');

        <div class="column maincontent">
            <header class="heading">
                <div class="sideLine"></div>
                <div class="headingText">
                    <h3>SKILLS</h3>
                </div>
                <div class="sideLine"></div>
            </header>
            <section class="skillsMainContent">
                @php ($colors = array("#1a53ff", "#009933", "#33ccff", "#ff3300"))
                <div class="barGraphs">
                    <div class="marketableSkills graph-cont">
                        <label style="font-size: 1.3vw;">MARKETABLE SKILLS</label><br /><br />
                        @php ($count = 0)
                        @foreach($marketableArray as $market)
                        <p>{{ $market->skill_name }}</p>
                        @php ($color = $colors[$count % 4])
                        <div class='container'>
                            <div class='skills' style='width: {{ $market->knowledge }}%; background-color: {{ $color }};'>{{ $market->knowledge }}%</div>
                        </div>
                        @php ($count = $count + 1)
                        @endforeach
                    </div>
                    <div class="TransferableSkills graph-cont">
                        <label style="font-size: 1.3vw;">TRANSFERABLE SKILLS</label><br /><br />
                        @php ($count = 0)
                        @foreach($transferableArray as $transferable)
                        <p>{{ $transferable->skill_name }}</p>
                        @php ($color = $colors[$count % 4])
                        <div class='container'>
                            <div class='skills' style='width: {{ $transferable->knowledge }}%; background-color: {{ $color }};'>{{ $transferable->knowledge }}%</div>
                        </div>
                        @php ($count = $count + 1)
                        @endforeach
                    </div>
                </div>
                <div class="languageSkills">
                    <label style="font-size: 1.3vw;">Language Skills and Knowledge</label>
                    <div class="pieCharts">
                        @php ($count = 0)
                        @foreach($languageArray as $languageArray)
                        @php ($text = '')
                        @if ($languageArray->knowledge > 50)
                        @php ($text = 'over50')
                        @endif
                        <div class='progress-circle {{ $text }} p{{$languageArray->knowledge}}'>
                            <span>{{ $languageArray->knowledge }}</span>
                            <div class='left-half-clipper'>
                                <div class='first50-bar'></div>
                                <div class='value-bar'></div>
                            </div>
                            <p style='padding-top:1.7vw;font-size:1.3vw;'>{{$languageArray->skill_name}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
</body>

</HTML>