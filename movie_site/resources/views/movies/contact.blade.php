@extends('movies.app')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Contact Movie Hub</h1>
        <p>
            Have questions or suggestions? Reach out to us!
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card bg-dark text-white shadow-lg border-0">
                <div class="card-body p-4">

                    <h4 class="mb-3">📬 Get in Touch</h4>
                    <p class="mb-4">
                        Fill out the form below and we will get back to you as soon as possible.
                    </p>

                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-control" rows="5" required></textarea>
                        </div>

                        <button class="btn btn-primary">Send Message</button>
                    </form>

                    @if(session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>
            </div>

            <div class="mt-4 text-center text-muted">
                <p>📧 Email: support@moviehub.com | ☎ Phone: +1 234 567 890</p>
            </div>

        </div>
    </div>

</div>
@endsection