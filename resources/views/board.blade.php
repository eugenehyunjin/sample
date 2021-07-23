@extends('layouts.master')

@section('content')
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">글 작성</h2><br>
                <form method="POST" action="/posts/store">
                    @csrf
                    <div class="form-group" align="center">
                        <input  style="width: 60%;" class="form-control" type="text" name="title" placeholder="제목">
                    </div>
                    <br>
                    <div class="form-group" align="center">
                        <textarea style="width: 60%; height: 400px;" name="description" class="form-control" placeholder="내용"></textarea>
                    </div><br>
                    <div class="form-group" align="center">
                        <button class="btn btn-primary btn-lg" type="submit">글 저장</button>
                        <button class="btn btn-primary btn-lg" type="reset">다시 쓰기</button>
                        <a href="/posts"><input class="btn btn-primary btn-lg" type="button" value="홈으로"></a>
                    </div>
                </form>
        </div>
    </section>
@endsection
