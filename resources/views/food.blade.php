<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of foods with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">

                @foreach ($data as $data)
                    <form action="{{url('/addtocart',$data->id)}}" method="post">
                        @csrf
                        <div class="item">
                            <div class='card' style="background-image: url('/foodimage/{{ $data->image }}');">
                                <div class="price">
                                    <h6>${{ $data->price }}</h6>
                                </div>
                                <div class='info'>
                                    <h1 class='title'>{{ $data->title }}</h1>
                                    <p class='description'>{{ $data->description }}</p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section">
                                            <a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 5px">
                                <input type="number" name="quantity" min="0" style="width: 80px;" placeholder="0">
                                <input type="submit" value="Add to Cart" style="background-color: yellow;">
                            </div>
                        </div>
                    </form>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
