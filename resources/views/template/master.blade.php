<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<nav>
    <ul class="d-flex" style="list-style: none">
        <li style="padding-left: 15px; padding-right: 15px;"><a href="/">Гавная</a></li>
        <li style="padding-left: 15px; padding-right: 15px;"><a href="{{route('vacancy')}}">Вакансии</a></li>
        <li style="padding-left: 15px; padding-right: 15px;"><a href="{{route('resume')}}">Резюме</a></li>
        <li style="padding-left: 15px; padding-right: 15px;"><a href="">Специалисты</a></li>
        <li style="padding-left: 15px; padding-right: 15px;"><a href="">Аккаунт</a></li>
    </ul>
</nav>
<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
</body>
</html>
