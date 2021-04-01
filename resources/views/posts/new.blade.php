@extends('./template/master')
@section('content')
    <?php
    $route = explode('.', \Request::route()->getName());
    ?>

    <form action="{{route('create.' . $route[1])}}" method="post">
        @csrf
        <p>Заголовок</p>
        <input type="text" class="form-control" name="title" required>
        <p>Описание</p>
        <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
        <p>цена</p>
        <input type="number" class="form-control" name="price">
        <button class="btn btn-success">Создать</button>
    </form>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
@endsection
