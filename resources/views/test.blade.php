<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('asset/style.css')}}">
    <style>
        body {
            margin: 0;
            overflow-x: hidden;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            line-height: 1.5;
            font-weight: 300;

            color-scheme: light dark;
            color: rgba(255, 255, 255, 0.87);
            background-color: #242424;

            font-synthesis: none;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-text-size-adjust: 100%;
        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 350px;
            margin: 13px 10px;
            background-color: #2d3748;
            padding: 10px;
            position: relative;
            border-radius: 8px;
        }

        .card__badge {
            position: absolute;
            top: 0;
            right: 0;
            width: 40px;
            height: 40px;
            background-color: rgb(227, 112, 30);
            border-radius: 100%;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translate(20px, -20px) scale(1);
            transition: all 0.3s ease;
            opacity: 0.8;
            font-size: 20px;
            font-weight: bold;
            animation: scaleanimation 1s ease infinite;
            color: #fff;
        }

        .card__badge-hidden {
            display: none;
        }

        @keyframes scaleanimation {
            to {
                transform: translate(20px, -20px) scale(1.05);
                opacity: 1;
            }
        }

        .image__container img {
            width: 100%;
            object-fit: cover;
        }

        .card__body {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card__title {
            font-weight: 400;
        }

        .card__price {
            font-size: 24px;
            font-weight: bold;
        }

        .hr {
            width: 100%;
            height: 1px;
            background: rgba(128, 128, 128, 0.656);
            margin-bottom: 10px;
        }

        .btn__container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 12px;
        }

        .cards__container {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .heading {
            text-align: center;
        }


        .btn {
            padding: 1rem 0.8rem;
            font-size: 20px;
            text-align: center;
            border: 0;
            outline: none;
            border-radius: 10px;
            width: 120px;
            box-shadow: 1px -3px 52px -5px rgba(0, 0, 0, 0.77);
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .btn.add {
            background-color: var(--primary-color);
        }

        .btn.add:hover {
            background-color: #cab320;
        }

        .btn.add:active {
            background-color: #ad9a1c;
        }

        .btn.remove {
            background-color: tomato;
        }

        .btn.remove:hover {
            background-color: rgb(209, 83, 61);
        }

        .btn.remove:active {
            background-color: rgb(185, 73, 54);
        }

        .btn.checkout {
            background-color: #47bb77c6;
            width: 150px;
            color: #fff;
            font-size: 16px;
        }

        .btn.checkout:hover {
            background-color: #47bb78;
        }

        .btn.checkout:active {
            background-color: rgb(30, 93, 41);
        }

        .btn.disabled {
            opacity: 0.5;
        }

        .nav {
            display: flex;
            justify-content: center;
            /*margin-left: 550px;*/
            width: 100%;
        }

        .navbar {
            display: flex;
            justify-content: center;
            list-style-type: none;
            background-color: #2d3748;
            padding: 10px;
            position: fixed;
            border-radius: 8px;
            margin-bottom: 0;
            width: 20%;
            overflow: hidden;
            bottom: 0;
        }

        .navbar li {
            float: left;
        }

        .navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #04AA6D;
        }

    </style>
    <title>Document</title>
</head>
<body>
<div class=" container">
    <div class="cards__container">
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
    <nav >
        <div style="display: flex; justify-content: center; margin-top: 70px">
            <ul class="navbar" style="width: 100%">
                <li><a href="#">Fast Food</a></li>
                <li><a href="#">Drinks</a></li>
                <li><a href="#">Sweets</a></li>
            </ul>
        </div>
    </nav>
</div>
<script src="{{asset('asset/script.js')}}"></script>
</body>
</html>