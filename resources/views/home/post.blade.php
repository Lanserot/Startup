<div class="row">
    @foreach($posts as $post)
        <?php $info = $post->userInfo($post->user_id)?>
        <div class="col-lg-12 mt-3 mb-3" style="border: 1px solid seashell; padding: 15px; max-height: 85px; overflow: hidden">
            <a href="{{route('view.' . $post->category, $post->id)}}">{{ $post->title }}</a>
            <p>{{$post->description}}</p>
            <br>
            имя {{ $info['first_name'] }} {{ $info['second_name'] }}<br>
            {{ $post->count_view }} просмотры<br>
            {{ $post->count_comment }} комменты<br>
            {{ $post->price }} цена

        </div>
    @endforeach
</div>
