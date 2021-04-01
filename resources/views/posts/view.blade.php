@extends('./template/master')
@section('content')
    {{$post->title}}
    <?php $owner = $post->userInfo($post->user_id)?>
    <br>
    <p style="white-space: pre-wrap;">
        {{ $post->description}}
    </p>
    <br>
    {{$owner->first_name}}
    <br>
    Комментари
@endsection
