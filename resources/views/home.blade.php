@extends('template.master')

@section('content')
    <main class="container-fluid p-0">

        <section style="background-color: yellow; height:70vh; position:relative;">
            <img src="{{ asset('img/intensive.jpg') }}" alt="intensive" style="height:70vh; width:100%; object-fit:cover">
            <div style="position:absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0, 0, 0, 0.5);"></div>
            <div style="max-width:300px; position:absolute; right:100px; top:200px; color: white; padding-left: 10px">
                <h1>Precision Staffing for Operational Excellence</h1>
                <p>We are committed to providing<br>solutions for our clients</p>
            </div>
        </section>


        <section class="p-0">
            <div class="row me-0 g-0">
                <div class="col-5" style="height: 500px">
                    <img class="w-100" src="{{ asset('img/intensive.jpg') }}" alt="intensive" style="height:100%; object-fit:cover">
                </div>
                <div class="col-7 d-flex align-items-center justify-content-center text-white" style="background-color: #151823">
                    <div class="p-5" style="max-width: 700px">
                        <h1>Who We Are</h1>
                        <hr>
                        <p>
                            AHI-US is a specialized division of Access Healthcare Staffing LLC, dedicated to delivering efficient staffing support for companies across the United States. Leveraging the expertise and
                            reousrces
                            of our parent compan. AHI-US focuses on providing tailored staffing services that address critical gaps and enhance internal operational success in client organizations
                        </p>
                        <div>
                            <a class="fa fa-facebook fag" href="https://www.facebook.com/accesshealthcarestaffing"></a>
                            <a class="fa fa-instagram fag" href="https://www.instagram.com/accesshealthcare/"></a>
                            <a class="fa fa-brands fa-x-twitter fag" href="https://twitter.com/AHCSTAFFINGLLC"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid px-5 py-5" style="background-color: rgb(247, 247, 247)">
            <h1>Services</h1>

            <hr>

            <div class="row row-cols-3">

                <div class="col">
                    <div class="card" style="background-color:#1A3950; ">
                        <img class="card-img-top" src="{{ asset('img/intensive.jpg') }}">
                        <div class="card-body text-white" style="min-height: 150px">
                            <h5 class="card-title">Credentialing</h5>
                            <p class="card-text">Ensure your healthcare professionals meet all regulatory requirements with our comprehensive credentialing.</p>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background-color:#1A3950; ">
                        <img class="card-img-top" src="{{ asset('img/intensive.jpg') }}">
                        <div class="card-body text-white" style="min-height: 150px">
                            <h5 class="card-title">Recruitment</h5>
                            <p class="card-text">Find and attract top talent with our specialized recruitment services, tailored to meet your staffing needs.</p>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background-color:#1A3950; ">
                        <img class="card-img-top" src="{{ asset('img/intensive.jpg') }}">
                        <div class="card-body text-white" style="min-height: 150px">
                            <h5 class="card-title">Sourcing</h5>
                            <p class="card-text">Discover the best candidates for your open positions with our expert sourcing services, leveraging advanced strategies.</p>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section class="container-fluid px-5 py-5" style="background-color:#151823">

            <div class="row row-cols-3 gy-3">

                <div class="col">
                    <div class="card" style="background-color:#1A3950">
                        <img class="card-img-top" src="{{ asset('img/intensive.jpg') }}">
                        <div class="card-body text-white" style="min-height: 150px">
                            <h5 class="card-title">Human Resources</h5>
                            <p class="card-text">Optimize your HR operations with our full-service human resources solutions, covering everything from employee relations.</p>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background-color:#1A3950">
                        <img class="card-img-top" src="{{ asset('img/intensive.jpg') }}">
                        <div class="card-body text-white" style="min-height: 150px">
                            <h5 class="card-title">Virtual Assistance</h5>
                            <p class="card-text">Enhance your productivity with our virtual assistance services, providing remote administrative support to handle.</p>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background-color:#1A3950">
                        <img class="card-img-top" src="{{ asset('img/intensive.jpg') }}">
                        <div class="card-body text-white" style="min-height: 150px">
                            <h5 class="card-title">Payroll Reconciliation</h5>
                            <p class="card-text">Maintain accurate payroll records and resolve discrepancies efficiently with our meticulous payroll reconciliation.</p>

                        </div>
                    </div>
                </div>

                <div class="col"></div>

                <div class="col">
                    <div class="card" style="background-color:#1A3950">
                        <img class="card-img-top" src="{{ asset('img/intensive.jpg') }}">
                        <div class="card-body text-white" style="min-height: 150px">
                            <h5 class="card-title">Social Media Management</h5>
                            <p class="card-text">Boost your online presence and engage with your audience effectively through our comprehensive social media.</p>

                        </div>
                    </div>
                </div>

                <div class="col"></div>


            </div>
        </section>

        <section class="container-fluid px-5 py-5" style="background-color: rgb(247, 247, 247)">
            <h1>From Our Clients</h1>
            <hr>

            <div class="d-flex justify-content-end -bottom-3">

                <div class="card mb-3 rounded-5" style="width: 60%; background-color: transparent">
                    <div class="d-flex">
                        <div class="p-3">
                            <img class="rounded-5" src="{{ asset('img/intensive.jpg') }}" alt="intensive" style="height:150px; width:150px; object-fit:cover">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <p>
                                "Their recruitment team consistently delivers top-notch candidates perfectly aligned with our company culture."
                            </p>
                            <p>
                                Casper Berkley, President of Fib & Joe
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card mb-3 rounded-5" style="width: 60%; background-color: transparent">
                <div class="d-flex">
                    <div class="p-3">
                        <img class="rounded-5" src="{{ asset('img/intensive.jpg') }}" alt="intensive" style="height:150px; width:150px; object-fit:cover">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <p>
                            "Their recruitment team consistently delivers top-notch candidates perfectly aligned with our company culture."
                        </p>
                        <p>
                            Casper Berkley, President of Fib & Joe
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">

                <div class="card mb-3 rounded-5" style="width: 60%; background-color: transparent">
                    <div class="d-flex">
                        <div class="p-3">
                            <img class="rounded-5" src="{{ asset('img/intensive.jpg') }}" alt="intensive" style="height:150px; width:150px; object-fit:cover">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <p>
                                "Their recruitment team consistently delivers top-notch candidates perfectly aligned with our company culture."
                            </p>
                            <p>
                                Casper Berkley, President of Fib & Joe
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            </div>
        </section>

        <section class="p-0">
            <div class="row me-0 g-0">
                <div class="col-5" style="height: 500px">
                    <img class="w-100" src="{{ asset('img/intensive.jpg') }}" alt="intensive" style="height:100%; object-fit:cover">
                </div>
                <div class="col-7 d-flex align-items-center justify-content-center text-white" style="background-color: #151823">
                    <div class="p-5" style="max-width: 900px">
                        <h1>Get in touch!</h1>
                        <hr>
                        <p>
                            Find out how our products<br>
                            can help you be more productive.
                            <br>
                            <br>
                            Contact Information: <br>
                            fadriano2@accesshealthcarestaffing.com
                        </p>
                        <div>
                            <a class="fa fa-facebook fag" href="https://www.facebook.com/accesshealthcarestaffing"></a>
                            <a class="fa fa-instagram fag" href="https://www.instagram.com/accesshealthcare/"></a>
                            <a class="fa fa-brands fa-x-twitter fag" href="https://twitter.com/AHCSTAFFINGLLC"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
