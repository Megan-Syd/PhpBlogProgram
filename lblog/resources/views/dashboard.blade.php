@extends('layouts.main')
@section('content')

<div class="container">
    <h1 class="m-5">Hey, {{ $user->first_name }}</h1>
    @if (session('successMsg'))
    <div class="alert alert-success" role="alert">
        {{ session('successMsg') }}
    </div>
    @endif
    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <h3 class="m-5 text-center">Here's what's going on today</h3>
        </div>
    </div>
    <div class="row">
        <!-- Left column -->
        <div class="col-md-2 mr-5">
            <h4>Your Info</h4>
            <p>Name:<br> {{ $user->first_name }} {{ $user->last_name }}</p>
            <p>Email:<br> {{ $user->email }}</p>
            <p>Joined on:<br> {{ $user->created_at->format('F j, Y') }}</p>
            <button class="btn rounded btn-raised btn-dark"><a class="text-white" href="{{ route('edit', $user->id) }}">Edit Account Details</a></button>
            <hr>
            <h5>Your local time:</h5>
            <h4>{{ \Carbon\Carbon::now()->format('F j, Y H:i') }}</h4>
        </div>
        <div class="col-md">
            <div class="border p-3 my-3 bg-white">
                <h3>Blog Post</h3>
                <h6>Author Name</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quae odit soluta temporibus quos, facilis mollitia sed quo, nemo numquam adipisci voluptatem, omnis iste illum fuga eveniet nesciunt? Quae, sapiente? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae laudantium repellat enim dolore ipsum, incidunt eius impedit perspiciatis, optio quia nemo error accusamus vitae unde consequatur dignissimos velit molestiae voluptates.</p>
                <h4>Section Heading</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi id magnam repellat harum reprehenderit incidunt aliquid ipsum, ea iusto cupiditate est voluptatum cum ad necessitatibus veniam corrupti illo adipisci consequatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eligendi esse illo officia excepturi. Error, perspiciatis officiis, consequuntur deserunt sequi beatae quae obcaecati fugit recusandae illo quisquam dolore id provident?</p>
            </div>
            <div class="border p-3 my-3 bg-white">
                <h3>Blog Post</h3>
                <h6>Author Name</h6>
                <figure class="figure">
                    <img class="figure-img img-fluid rounded" src="{{ asset('images/img-placeholder.png') }}" alt="Placeholder image" width="300" height="auto">
                    <figcaption class="figure-caption">nemo numquam adipisci voluptatem</figcaption>
                </figure>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quae odit soluta temporibus quos, facilis mollitia sed quo, nemo numquam adipisci voluptatem, omnis iste illum fuga eveniet nesciunt? Quae, sapiente? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae laudantium repellat enim dolore ipsum, incidunt eius impedit perspiciatis, optio quia nemo error accusamus vitae unde consequatur dignissimos velit molestiae voluptates.</p>
            </div>
            <div class="border p-3 my-3 bg-white">
                <h3>Blog Post</h3>
                <h6>Author Name</h6>
                <div class="d-flex justify-content-between">
                    <figure class="figure">
                        <img class="figure-img img-fluid rounded" src="{{ asset('images/img-placeholder.png') }}" alt="Placeholder image" width="175" height="auto">
                        <figcaption class="figure-caption">nemo numquam</figcaption>
                    </figure>
                    <figure class="figure">
                        <img class="figure-img img-fluid rounded" src="{{ asset('images/img-placeholder.png') }}" alt="Placeholder image" width="175" height="auto">
                        <figcaption class="figure-caption">adipisci voluptatem</figcaption>
                    </figure>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quae odit soluta temporibus quos, facilis mollitia sed quo, nemo numquam adipisci voluptatem, omnis iste illum fuga eveniet nesciunt? Quae, sapiente? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae laudantium repellat enim dolore ipsum, incidunt eius impedit perspiciatis, optio quia nemo error accusamus vitae unde consequatur dignissimos velit molestiae voluptates.</p>
            </div>
        </div>
        <!-- Right column -->
        <div class="col-md">
            <div class="border p-3 my-3 bg-white">
                <h3>Blog Post</h3>
                <h6>Author Name</h6>
                <figure class="figure">
                    <img class="figure-img img-fluid rounded" src="{{ asset('images/img-placeholder.png') }}" alt="Placeholder image" width="200" height="auto">
                    <figcaption class="figure-caption">nemo numquam adipisci voluptatem</figcaption>
                </figure>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quae odit soluta temporibus quos, facilis mollitia sed quo, nemo numquam adipisci voluptatem, omnis iste illum fuga eveniet nesciunt? Quae, sapiente? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae laudantium repellat enim dolore ipsum, incidunt eius impedit perspiciatis, optio quia nemo error accusamus vitae unde consequatur dignissimos velit molestiae voluptates.</p>
            </div>
            <div class="border p-3 my-3 bg-white">
                <h3>Blog Post</h3>
                <h6>Author Name</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quae odit soluta temporibus quos, facilis mollitia sed quo, nemo numquam adipisci voluptatem, omnis iste illum fuga eveniet nesciunt? Quae, sapiente? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae laudantium repellat enim dolore ipsum, incidunt eius impedit perspiciatis, optio quia nemo error accusamus vitae unde consequatur dignissimos velit molestiae voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores vitae veniam quaerat maxime delectus nobis molestiae illum commodi dolorum quam atque quo, porro hic, mollitia dolorem sed dolor. Laudantium, eos.</p>
            </div>
            <div class="border p-3 my-3 bg-white">
                <h3>Blog Post</h3>
                <h6>Author Name</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quae odit soluta temporibus quos, facilis mollitia sed quo, nemo numquam adipisci voluptatem, omnis iste illum fuga eveniet nesciunt? Quae, sapiente? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae laudantium repellat enim dolore ipsum, incidunt eius impedit perspiciatis, optio quia nemo error accusamus vitae unde consequatur dignissimos velit molestiae voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores vitae veniam quaerat maxime delectus nobis molestiae illum commodi dolorum quam atque quo, porro hic, mollitia dolorem sed dolor. Laudantium, eos.</p>
                <figure class="figure float-md-right">
                    <img class="figure-img img-fluid rounded" src="{{ asset('images/img-placeholder.png') }}" alt="Placeholder image" width="200" height="auto">
                    <figcaption class="figure-caption">nemo numquam adipisci voluptatem</figcaption>
                </figure>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quae odit soluta temporibus quos, facilis mollitia sed quo, nemo numquam adipisci voluptatem, omnis iste illum fuga eveniet nesciunt? Quae, sapiente? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae laudantium repellat enim dolore ipsum, incidunt eius impedit perspiciatis, optio quia nemo error accusamus vitae unde consequatur dignissimos velit molestiae voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores vitae veniam quaerat maxime delectus nobis molestiae illum commodi dolorum quam atque quo, porro hic, mollitia dolorem sed dolor. Laudantium, eos.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi corrupti inventore reiciendis asperiores quidem, nesciunt quibusdam reprehenderit minima enim neque officiis dolore hic ducimus odio quod rem alias. Fuga, ipsam?</p>
            </div>
        </div>
    </div>
</div>

@endsection