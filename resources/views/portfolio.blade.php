<!DOCTYPE html>
<HTML>

<head>
    <title>PORTFOLIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div id="wrapper">

        @include ('navbar');
        <section class="column maincontent">
            <header class="heading">
                <div class="sideLine"></div>
                <div class="headingText">
                    <h3>PORTFOLIO</h3>
                </div>
                <div class="sideLine"></div>
            </header>
            <div class="portfolioMenu">
                <button name="all"><a href="/portfolio">All</a></button>
                <button name="websiite"><a href="/website">Website</button>
                <button name="apps"><a href="/apps">Apps</button>
                <button name="design"><a href="/design">Design</button>
                <button name="photography"><a href="/photography">Photography</button>
            </div>
            <!-- <div class="portfolioMainContent"> -->
            <div class="portfolioMainContent">
                @foreach ($portfolios as $portfolio)
                <img src='{{ $portfolio->image_link }}' />
                @endforeach
            </div>
        </section>
    </div>
</body>

</HTML>