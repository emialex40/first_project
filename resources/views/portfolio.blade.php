@extends('layouts.index')
@section('content')

@if (isset($posts))
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
@endif
</body>
</html>
@endsection
