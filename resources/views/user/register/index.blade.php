@extends('../template/master')
@section('content')
    <form method="post">
        @csrf
        <input type="text" name="name" class="form-control" placeholder="name">
        <input type="text" name="email" class="form-control" placeholder="email">
        <input type="password" name="password" class="form-control" placeholder="password">
        <input type="password" name="password_2" class="form-control" placeholder="password 2">
        <button type="submit" class="btn btn-success">Register</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
