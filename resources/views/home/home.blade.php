@extends('home.master')
@section('main-content')



    <div class="wrapper">
        <!-- MAIN CONTAINER -->
        <section class="main-container">
            <div class="location" id="home">
                <h1 id="myList">Trending Now</h1>
                <div class="box col-md-11">
                    @foreach ($trendings as $item)
                        <a href="detail/{{ $item['id'] }}"><img src="{{ asset('uploads/storeimages/' . $item['image']) }}"
                                alt="no image"></a>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="main-container">
            <div class="location" id="home">
                <h1 id="movies">Web Series</h1>
                    <div class="box col-md-11">
                        @foreach ($webseries as $item)
                            <a href="detail/{{ $item['id'] }}"><img src="{{ asset('uploads/storeimages/' . $item['image']) }}"
                                    alt="no image"></a>
                        @endforeach
                </div>
            </div>
        </section>

        <section class="main-container">
            <div class="location" id="home">
                <h1 id="home">All</h1><br>
                <div class="box col-md-11">
                    @foreach ($movies as $item)
                        <a href="detail/{{ $item['id'] }}"><img src="{{ asset('uploads/storeimages/' . $item['image']) }}"
                                alt="no image"></a>
                    @endforeach
                </div>
            </div>
        </section>



        <!-- END OF MAIN CONTAINER -->

        <!-- LINKS -->
        <section class="link">
            <div class="logos">
                <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
                <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
            </div>
            <div class="sub-links">
                <ul>
                    <li><a href="#">Audio and Subtitles</a></li>
                    <li><a href="#">Audio Description</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Gift Cards</a></li>
                    <li><a href="#">Media Center</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Legal Notices</a></li>
                    <li><a href="#">Corporate Information</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </section>
        <!-- END OF LINKS -->

    </div>
@endsection
