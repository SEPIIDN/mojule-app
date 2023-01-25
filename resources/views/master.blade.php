<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>moJule</title>
    {{-- bootstrap css cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- bootstrap js cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
</body>
<style>
    :root {
        --main-color: #2980b9;
        --orange: #f39c12;
        --red: #e74c3c;
        --black: #333;
        --white: #fff;
        --light-color: #666;
        --light-bg: #eee;
        --border: .2rem solid var(--black);
        --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    }

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    li{
        list-style: none;
    }
    a{
        text-decoration: none;
    }
    ::-webkit-scrollbar {
        height: .5rem;
        width: 1rem;
    }

    ::-webkit-scrollbar-track {
        background-color: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #979a9c;
        border-radius: 50px;
    }

    .custom-login {
        height: 500px;
        padding-top: 100px;
    }

    img.slider-img {
        height: 400px !important;
    }

    .custom-product {
        height: 600px
    }

    .slider-text {
        background-color: #35443585 !important;
    }

    .trending-image {
        height: 40vh;
    }

    .trending-item {
        align-self: center;
    }

    .trending-text {
        margin-inline-start: 2rem;
    }

    .mycontainer {
        min-height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .box {
        height: 350px;
        width: 400px;
        background-color: lightblue;
        position: relative;
        overflow: hidden
    }

    .box img {
        width: 100%;
        height: 100%
    }

    .content {
        background-color: black;
        color: white;
        position: absolute;
        top: -100%;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 20px;
        transition: all 0.7s;
        opacity: 0.7
    }

    .box:hover .content {
        top: 0;
    }

    .content p {
        border-top: 1px solid white;
        border-bottom: 1px solid white;
        padding: 17px 0px
    }

    .trending-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 30px;
    }
    .test{
        margin: 30px;
    }

    .detail-img {
        height: 200px;
    }

    .search-box {
        width: 500px !important
    }

    .cart-list-devider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }

    .drp {
        margin-left: 5rem !important;
        margin-right: 6rem !important;
    }

    .footer {
        margin-top: 15rem;
    }
</style>

</html>
