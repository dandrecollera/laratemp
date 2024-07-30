@extends('template.adminmaster')


@section('content')
    <section class="container my-4">
        <h1>Add Blog Post</h1>
        <form id="myForm" method="post" action="/newposttest" enctype="multipart/form-data">
            @csrf

            <div class="input-group mb-3">
                <span class="input-group-text">Title</span>
                <input class="form-control" name="title" type="text" placeholder="Title*">
            </div>

            <div id="editor" style="height: 300px;">
            </div>
            <input id="contentInput" name="content" type="hidden">

            <br>

            Featured Image:
            <div class="input-group  mb-3">
                <input class="form-control" id="inputGroupFile01" name="image" type="file" accept="image/jpeg,image/png">
            </div>

            <button class="btn text-white my-3" type="submit" style="background-color: #1A3950">Add Post</button>
        </form>
    </section>
@endsection

@push('jsscripts')
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
        });

        document.getElementById('myForm').onsubmit = function() {
            var content = quill.root.innerHTML;
            document.getElementById('contentInput').value = content;
            // You can also log the content or perform additional processing here
            console.log(content);
        };
    </script>
@endpush
