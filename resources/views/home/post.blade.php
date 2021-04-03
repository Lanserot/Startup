<div class="row">
    @foreach($posts as $post)
        <?php $info = $post->userInfo($post->user_id)?>
        <div class="col-lg-12 mt-1 mb-1" style="border: 1px solid seashell;
box-shadow: 0 0 5px -3px silver;
border-radius: 15px;
padding: 15px;">
            <a href="{{route('view.' . $post->category, $post->id)}}">{{ $post->title }}</a>
            <p style=" max-height: 50px;
                white-space: nowrap; /* Отменяем перенос текста */
                overflow: hidden; /* Обрезаем содержимое */
                padding: 15px 0; /* Поля */
                text-overflow: ellipsis; /* Многоточие */">
                {{$post->description}}
            </p>
            <div>
                имя {{ $info['first_name'] }} {{ $info['second_name'] }}
                {{ $post->count_view }} просмотры
                {{ $post->count_comment }} комменты
                {{ $post->price }} цена
            </div>


        </div>
    @endforeach
</div>
