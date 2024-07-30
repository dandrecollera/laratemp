@extends('template.master')

@section('content')
    <section>
        <div class="container-xl py-3">
            <h1>Blogs</h1>

            <div class="my-3">


                <div class="row">
                    <div class="col-lg-12 order-2 order-lg-1">
                        @php
                            $blogresult = DB::table('blog')->where('status', 'active')->orderBy('id', 'desc')->get()->toArray();
                        @endphp


                        <div id="blogContainer">
                            @foreach ($blogresult as $blog)
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img class="rounded-start" src="{{ asset('storage/blog/' . $blog->image) }}" alt="{{ $blog->image }}"
                                                style="height: 100%; min-height: 350px; max-height:350px; width: 100%; object-fit: cover;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body py-4">
                                                <h2 class="card-title">{{ $blog->title }}</h2>
                                                <div class="card-text" style="max-height: 4.4em; overflow: hidden; word-wrap: break-word; text-overflow: ellipsis;">
                                                    {!! str_replace(['<br>', '<b>', '</b>', 'src', '</p>', '<p>'], [' ', '', '', '', '', ''], $blog->content) !!}
                                                </div>
                                                <p class="card-text text-body-secondary my-2" style="line-height:1.2">
                                                    <small>{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}</small><br>
                                                    <span style="font-size:11px">{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</span>
                                                </p>
                                                <a class="btn mt-3 text-white" href="/article?id={{ $blog->id }}" style="background-color: #1A3950">Read Article</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection

@push('jsscripts')
    <script>
        $(document).ready(function() {
            const searchtitle = $('#searchtitle');

            $('#searchbutton').on('click', function() {
                createSearchQuery();
            })

            $('.category-checkbox').change(function() {
                createSearchQuery();
            });

            function createSearchQuery() {
                let title = searchtitle.val();
                let selectedCategories = [];

                $('.category-checkbox:checked').each(function() {
                    selectedCategories.push($(this).val());
                });

                $.get('/fetchblog', {
                    title: title,
                    categories: selectedCategories
                }, function(data) {
                    let container = $('#blogContainer');
                    container.empty();

                    data.forEach(function(blog) {
                        let blogCard = $('<div class="card mb-3">' +
                            '<div class="row g-0">' +
                            '<div class="col-md-4">' +
                            '<img src="{{ asset('storage/blog/') }}/' + blog.image +
                            '" class="rounded-start" style="height: 100%; min-height: 350px; max-height:350px; width: 100%; object-fit: cover;">' +
                            '</div>' +
                            '<div class="col-md-8">' +
                            '<div class="card-body p-4">' +
                            '<h2 class="card-title">' + blog.title + '</h2>' +
                            '<div class="card-text" style="max-height: 4.4em; overflow: hidden; word-wrap: break-word; text-overflow: ellipsis;">' +
                            blog.content +
                            '</div>' +
                            '<p class="card-text text-body-secondary my-2" style="line-height:1.2"><small>' + blog.created_at_formatted + '</small><br>' +
                            '<span style="font-size:11px">' + blog.created_at_diff + '</span>' +
                            '</p>' +
                            '<a href="/article?id=' + blog.id + '" class="btn mt-3 text-white" style="background-color: #1A3950">Read More</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>');

                        container.append(blogCard);
                    });
                });
            }
        });
    </script>
@endpush
