@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
</script>



<div class="alert alert-warning mt-5" role="alert">
    Welcome to UX Qode!
</div>



<div class="container" style="z-index: -1; width: 100%;">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="z-index: -1; width: 100%;">
                <center><img src="{{asset('/storage/photos/1.jpg')}}" class="d-block w-90" alt="..." width="1080"
                        height="680"></center>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-danger">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                </div>
            </div>
            <div class="carousel-item" style="z-index: -1; width: 100%;">
                <center><img src="{{asset('/storage/photos/2.jpg')}}" class="d-block w-75" alt="..." width="1080"
                        height="680"></center>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-danger">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                </div>
            </div>
            <div class="carousel-item" style="z-index: -1; width: 100%;">
                <!-- <img src="https://source.unsplash.com/1600x800/?donation,needy" class="d-block w-100" alt="..."
                    width="1080" height="680"> -->
                <center><img src="{{asset('/storage/photos/3.jpg')}}" class="d-block w-75" alt="..." width="1080"
                        height="680"></center>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-danger">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>



<div class="row mt-3">
    <div class="col-xl-6 col-lg-6 ">
        <img class="side_image1" src="{{asset('/storage/photos/donate.jpg')}}">
    </div>
    <div class="col-xl-6 col-lg-6">
        <P>The Puerto Rican Association of Hemophilia and Bleeding Conditions was a
            recipient of our Continuity of Care grant. Their mission is to support patients with hemophilia and
            other bleeding conditions, promoting education to improve their quality of life; demanding a higher
            level of medical care. In 2020, Puerto Rico was devastated by the affects of COVID-19...Read More</P>
    </div>
</div>



<div class="fourth_row ml-5 mt-5">
    <div class="row">
        <div class="header-wrap1" style="margin-left:26px">
            <h6>Meet the Puerto Rican Association of Hemophilia and Bleeding Conditions</h6>
        </div>

        <div class="col-xl-6 col-lg-6 ">
            <p>The Puerto Rican Association of Hemophilia and Bleeding Conditions was a
                recipient of our Continuity of Care grant. Their mission is to support patients with hemophilia and
                other bleeding conditions, promoting education to improve their quality of life; demanding a higher
                level of medical care. In 2020, Puerto Rico was devastated by the affects of COVID-19...Read More</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <img class="side_image1" src="{{asset('/storage/photos/donation.jpg')}}">
        </div>

    </div>
</div>

<div class="row">
    <div class="conatiner col-10">
        <form action="" method="get">
            <div class="card ml-5" style="width: 18rem;">
                <img src="{{asset('/storage/photos/main.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-danger">You Call it a Donation, We Call it Hope.</h4>
                    <p class="card-text"> <em> you get more joy out of giving joy to others, you should put a good deal
                            of
                            thought
                            into the happiness that you are able to give.</em></p>
                    <center><input type="submit" value="Donate" class="btn btn-primary"
                            formaction="{{ url('/patient_list') }}">
                    </center>
                </div>
            </div>
        </form>
    </div>


    <div class="card mt-3 col-2 ">
        <form method="get">
            <div class="card-body ">
                <h5 class="card-title text-success"><u>Donate</u></h5>
                <ul class="list-unstyled">
                    <li><samp class="card-text"> Save</samp></li>
                    <li><samp class="card-text"> The</samp></li>
                    <li><samp class="card-text"> World</samp></li>
                </ul>
                <input type="submit" value="Donate" class="btn btn-danger" formaction="{{ url('/donate_all') }}">
            </div>
        </form>
    </div>
</div>






<div class="container mt-5">
    <form method="get">


        <!-- <input type="submit" class="btn btn-primary btn-lg btn-block" value="Donor List" formaction="{{url('/donor')}}">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Patient List"
            formaction="{{url('/patient_list')}}"> -->
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Patient Register"
            formaction="{{url('/patient_register')}}">

    </form>
</div>


<div class="container marketing">

    <center>
        <div class="row mt-5">
            <div class="col-lg-4">
                <img src="{{asset('/storage/photos/airport.jpg')}}" alt="{{asset('/storage/photos/airport.jpg')}}"
                    class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h2>CM</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is
                    the
                    first
                    column.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{asset('/storage/photos/vespa.jpg')}}" alt="{{asset('/storage/photos/vespa.jpg')}}"
                    class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h2>Vespa</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the
                    second
                    column.
                </p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{asset('/storage/photos/mandeep.jpg')}}" alt="{{asset('/storage/photos/mandeep.jpg')}}"
                    class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h2>Mandeep</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div>
    </center>
</div>






<footer class="container mt-5">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2020–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>





<STYle>
img.side_image1 {
    WIDTH: 100%;
    HEIGHT: 240PX;
    OBJECT-FIT: contain;
}


.card.mt-3.col-2 {
    height: 204px;
    width: 129px;
}
</STYle>
@endsection