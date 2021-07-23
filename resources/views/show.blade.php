@extends('layouts.master')

@section('content')

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">게시판 목록</h2>


            @forelse($posts as $post)
                <br>
                <li class="list-group-item" style="text-align: center">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="/posts/{{ $post->id }}">
                        {{$post -> title}}</a>
                </li><br>
            @empty
                <ul class="list-group" style="padding-top: 50px;">
                    <li class="list-group-item" style="text-align: center">
                        <span class="nav-link py-3 px-0 px-lg-3 rounded">저장된 글이 없습니다.</span>
                    </li>
                </ul><br>
            @endforelse

{{--            @if($posts == '[]')--}}
{{--                <ul class="list-group" style="padding-top: 50px;">--}}
{{--                        <li class="list-group-item" style="text-align: center">--}}
{{--                            <span class="nav-link py-3 px-0 px-lg-3 rounded">저장된 글이 없습니다.</span>--}}
{{--                        </li>--}}
{{--                </ul><br>--}}
{{--            @else--}}
{{--            <ul class="list-group" style="padding-top: 50px;">--}}
{{--                @foreach($posts as $post)--}}
{{--                    <li class="list-group-item" style="text-align: center">--}}
{{--                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="/posts/{{$post->id}}">--}}
{{--                            {{$post -> title}}</a>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul><br>--}}
{{--            @endif--}}
            <div align="center">
                <form method="get" action="/posts/create">
                    <input class="btn btn-primary btn-lg" type="submit" value="글 쓰기"/>
                </form>
            </div>
        </div>
    </section>
@endsection
