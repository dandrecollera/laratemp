@extends('template.master')

@section('content')
    <section>
        <div class="container-xl py-5">
            <div class="row">
                <div class="col-lg-8 px-4" style="border-right: 0.5px solid rgb(228, 228, 228)">
                    <div>
                        <center>
                            <h2 class="mb-4">{{ $article->title }}</h2>
                        </center>
                        <img class="w-100 rounded-3 mb-4" src="{{ asset('storage/blog/' . $article->image) }}">
                        <div>
                            {!! $article->content !!}
                        </div>
                    </div>
                </div>
                <div class="d-block d-lg-none">
                    <br>
                    <hr>
                    <br>
                </div>
                <div class="col-lg-4 px-4">
                    <h4>Latest Article</h4>
                    @php
                        $latestnews = DB::table('blog')->where('status', 'active')->orderBy('id', 'desc')->limit(5)->get()->toArray();
                    @endphp
                    <ul class="list-group list-group-flush">
                        @foreach ($latestnews as $news)
                            <li class="list-group-item py-3">
                                <a href="/article?id={{ $news->id }}" style="color:inherit; text-decoration:none">
                                    <div>
                                        <b>{{ $news->title }}</b>
                                    </div>
                                    <div style="font-size: 12px">
                                        {{ \Carbon\Carbon::parse($news->created_at)->format('F j, Y') }} {{ \Carbon\Carbon::parse($news->created_at)->diffForHumans() }}
                                    </div>

                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
