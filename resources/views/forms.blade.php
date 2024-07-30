@extends('template.master')


@section('content')
    <section style="background-color: yellow; height:70vh; position:relative;">
        <img src="{{ asset('img/intensive.jpg') }}" alt="intensive" style="height:70vh; width:100%; object-fit:cover">
        <div style="position:absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0, 0, 0, 0.5);"></div>
        <div style="max-width:300px; position:absolute; right:100px; top:200px; color: white; padding-left: 10px">
            <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, est.</h1>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </section>

    <section class="p-0">
        <div class="row me-0 g-0">
            <div class="col-5" style="height: 500px">
                <img class="w-100" src="{{ asset('img/2 - Caregiver Assist Senior Woman.webp') }}" alt="intensive" style="height:100%; object-fit:cover">
            </div>
            <div class="col-7 d-flex align-items-center justify-content-center text-white" style="background-color: #151823">
                <div class="p-5" style="max-width: 700px">
                    <h1>Who We Are</h1>
                    <hr>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente iusto, impedit id natus hic, laboriosam sequi, omnis modi inventore est accusantium at sit deleniti? Illo quidem minus mollitia
                        perspiciatis dicta culpa voluptates alias, magni quae fugit voluptatum est, harum corrupti natus distinctio rerum rem, doloribus repellat accusamus laborum ex nostrum.
                    </p>

                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid px-5 py-5" style="background-color: rgb(247, 247, 247)">
        <h1>Services</h1>
        <hr>
        <div class="card mt-4 text-white" style="background-color:#1A3950">
            <div class="card-body">
                <h3 class="card-title">Send Resume</h3>

                <form class="mt-4" action="">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Name</span>
                        <input class="form-control" type="text" placeholder="First Name*">
                        <input class="form-control" type="text" placeholder="Middle Name">
                        <input class="form-control" type="text" placeholder="Last Name*">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input class="form-control" type="email" placeholder="Email*">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Phone Number</span>
                        <input class="form-control" type="text" placeholder="phonenumber">
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="formFile">Attach R esume</label>
                        <input class="form-control" id="formFile" type="file">
                    </div>

                    <button class="btn" style="background-color: #FFFF80">Send Details</button>
                </form>



            </div>

        </div>
    </section>
@endsection
