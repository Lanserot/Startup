@extends('./template/master')
@section('content')
    <h1>Резюме {{$resumeCount}}</h1>
    @include('home.post', ['posts'=>$resume])
    <a href="{{route('new.resume')}}" class="btn btn-success">Новое резюме</a>
    <h1>Вакансии {{$vacancyCount}}</h1>
    @include('home.post', ['posts'=>$vacancy])
    <a href="{{route('new.vacancy')}}" class="btn btn-success">Новая вакансия</a>
@endsection
