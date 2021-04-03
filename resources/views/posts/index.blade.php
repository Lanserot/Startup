@extends('./template/master')
@section('content')
    <div class="container">
        <h1>{{$page}}</h1>
        @include('home.post', ['posts'=>$posts])
        <a href="{{route('new.' . \Request::route()->getName())}}" class="btn btn-success">Новая вакансия</a>
    </div>
@endsection
