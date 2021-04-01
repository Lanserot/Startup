@extends('./template/master')
@section('content')
    <div class="container">
        <h1>{{$page}}</h1>
        @include('home.post', ['posts'=>$posts])
    </div>
@endsection
