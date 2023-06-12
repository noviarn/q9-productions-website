<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <title>HOME-q9production</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
</head>
<body>

        <div class="header">
            <div class="logo">
                <h3><a href="/">Q9Production</a></h3>
            </div>
            <div class="menu">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Gallery</a>
                <a href="">Contact Us</a>
            </div>
        </div>
        <div class="container">
        @if($results->isEmpty())
            <p>No results found.</p>
        @else
            <ul>
                @foreach($results as $result)
                    <li>{{ $result->judul_konten }}</li>
                    <li>{{ $result->Author }}</li>
                    <li>{{ $result->isi_konten }}</li>
                    <li>{{ $result->sumber }}</li>
                @endforeach
            </ul>
        @endif
        </div>
        

</body>
</html>