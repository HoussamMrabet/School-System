<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     @vite(['resources/js/app.js'])

</head>
<body>
            <header >
                <div class="container">
                    <div class="logo"></div>
                    <div class="links">
                        <a href="#">DEMANDEZ</a>
                        <a href="#">SUIVER</a>
                        <a href="#">GUIDE</a>
                    </div>
                </div>
            </header>
            <div class="  container">
                    <div class="item right" >
                            <img src="{{asset('build/images/home_image.svg')}}" />
                    </div>
                    <div class="item left">

                    </div>
            </div>
</body>
</html>