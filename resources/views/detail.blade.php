@extends('layouts.master')

@section('content')
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">글 상세 페이지</h2><br>
                    <div class="form-group" align="center">
                        <input  style="width: 60%;" class="form-control" type="text" name="title" value="{{ $post->title }}" >
                    </div>
                    <br>
                    <div class="form-group" align="center">
                        <textarea style="width: 60%; height: 400px;" name="description" class="form-control" >{{ $post->description }}</textarea>
                    </div><br>
                    <div class="form-group" align="center">
                        <form method="POST" action="/posts/{{ $post->id }}">
                        <a href="/posts/{{ $post -> id }}/edit"><button class="btn btn-primary btn-lg" type="button">수정하기</button></a>
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-primary btn-lg" type="submit">글 삭제</button>
                        </form>
                    </div>
        </div>
    </section>
@endsection
