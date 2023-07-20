<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Hello World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        /* Layout */
        header{
            background-color: lightblue;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 15px;
            font-weight: bold;
        }
        main{
            margin-top: 100px;
        }
        /* General */
        ul{
            list-style-type: none;
            align-self: center;
        }
        li{
            margin: 0 15px;
            cursor: clicker;
        }
        a{
            color: inherit;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="content d-flex justify-content-between">
                        <div class="logo">
                            <h1>
                                <a href="/">
                                    Hello World
                                </a>
                            </h1>
                        </div>
                        <div class="links d-flex">
                            <ul class="d-flex p-0">
                                <li><a href="/about-us">About us</a></li>
                                <li><a href="/shop">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>
                        {{$message}}, my name is {{$surname}} {{$name}}
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>