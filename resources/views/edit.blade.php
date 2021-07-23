@extends('layouts.master')

@section('content')
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <section>
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">글 수정하기</h2><br>
                <form method="POST" action="/posts/{{ $post->id }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group" align="center">
                        <input style="width: 60%;" class="form-control" type="text" name="title" value="{{ $post->title }}">
                    </div><br>

                    <div class="form-group" align="center">
                        <textarea style="width: 60%; height: 200px;" class="form-control" name="description">{{ $post->description }}</textarea>
                    </div><br>

                    <div class="form-group" align="center">
                        <button class="btn btn-primary btn-lg" type="submit">수정하기</button>
                        <a href="/posts"><input class="btn btn-primary btn-lg" type="button" value="홈으로"></a>
                    </div>
                </form>
            </section>
        </div>
    </section>
@endsection
