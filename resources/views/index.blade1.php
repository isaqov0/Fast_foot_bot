<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('asset/style.css')}}">
    <title>Document</title>
</head>
<body>
<div id="root" >
    <div class="row">
        <div>
        <div class="col-12 cards__container">
        @foreach($foods as $food)
            <div class='card'>
                <span></span>
                <div class='image__container'>
                    <img
                            src="{{$food->image}}"
                            alt=""
                            width='100%'
                            height='230px'
                    />
                </div>

                <div class='card__body'>
                    <h2 class='card__title'>{{$food->name}}</h2>
                    <div class='card__price'>
                        {{$food->price}}
                    </div>
                </div>

                <div class='hr'></div>

                <div class='btn__container'>
                    <button class="btn btn__container">+</button>
                    <button class="btn btn__container">-</button>
                </div>
            </div>
        @endforeach
        </div>

        <div class="navbar">
            <ul>
                <li><a href="#">Fast Food</a></li>
                <li><a href="#">Drinks</a></li>
                <li><a href="#">Sweets</a></li>
                <li><a href="#">Palonchi</a></li>
            </ul>
        </div>
        </div>
    </div>

</div>
<script src="{{asset('asset/script.js')}}"></script>
<link>
</body>
</html>