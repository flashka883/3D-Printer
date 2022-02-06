

@extends('common_template')

@section('content')

    <!-- Sections -->
    <div class="sections">

        <!-- Product -->
        <div class="product">
            <div class="col left-col">
                <div class="image-holder">
                    <img src="{{ asset($product->defaultImage->fullpath) }}" alt="">
                </div>
                <div class="product-gallery">
                    <div class="owl-carousel owl-theme">
                        @foreach ($product->images as $media)
                            <div class="item">
                                <img src="{{ asset($media->image->fullpath) }}" alt="Product Image">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col right-col">
                <div class="row">
                    <h3 class="status">Popular</h3>
                    <a href="#" class="like" onclick="return false;"><i class="far fa-heart"></i></a>
                </div>
                <div class="title-holder">
                    <h2 class="title">Black Valentino dress with tulle</h2>
                </div>
                <div class="row rating-holder">
                    <div class="rating rate-area">
                        {{-- <label for="5-star" title="Amazing"><i class="fas fa-star"></i></label>
                        <label for="4-star" title="Good"><i class="fas fa-star"></i></label>
                        <label for="3-star" title="Average"><i class="fas fa-star"></i></label>
                        <label for="2-star" title="Not Good"><i class="fas fa-star"></i></label>
                        <label for="1-star" title="Bad"><i class="fas fa-star"></i></label> --}}
                        @for ($i = 0; $i < $product->rating(); $i++)
                            <i class="fas fa-star active"></i>
                        @endfor    
                        @for ($i = 0; $i <= 4 - $product->rating(); $i++)
                            <i class="fas fa-star"></i> 
                        @endfor
                    </div>
                    <span class="review-counter">{{ $product->reviewsCount() }} reviews</span>
                </div>
                <div class="row">
                    <div class="tabs-holder">
                        <div class="tabs">
                            <div class="tab active">
                                <h2>Info</h2>
                                <p class="text">
                                    Dress with tulle and collar Peter Pan from REDValentino 
        (Red Valentino). Peter Pan collar, tulle panels, sleeveless model, 
        concealed back zipper and pleated skirt. Black colour.
                                </p>
                            </div>
                            <div class="tab">
                                <h2>Brand</h2>
                                <p class="text">
                                    Our brand is making literaly the best products. Our specialist designed the products by coping the other brands just so we have the most unique product. If you are not buying from us u are dump as f.  Have a great day!
                                </p>
                            </div>
                            <div class="tab">
                                <h2>Delivery</h2>
                                <p class="text">
                                    Our delivery is instant. Imagine the speed of light that we can call slow. We use up to the edge technology to teleport our product directly to the customer and if he is not happy we just take his money.
                                </p>
                            </div>
                        </div>
                        <p class="content">
                            Dress with tulle and collar Peter Pan from REDValentino 
        (Red Valentino). Peter Pan collar, tulle panels, sleeveless model, 
        concealed back zipper and pleated skirt. Black colour.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="size-container">
                        <div class="col left-col">
                            <div class="row first-row">
                                <h3 class="size">Size</h3>
                                <h3 class="size-guide font-pink">Size Guide</h3>
                            </div>
                            <div class="row last-row">
                                <div class="size xs">
                                    <h4>XS</h4>
                                </div>
                                <div class="size s active">
                                    <h4>S</h4>
                                </div>
                                <div class="size m">
                                    <h4>M</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col right-col">
                            <div class="row first-row">
                                <h3>Color</h3>
                            </div>
                            <div class="row last-row">
                                <div class="color-box active">
                                    <div class="color dark-grey"> </div>
                                </div>
                                <div class="color-box">
                                    <div class="color dark-green"> </div>
                                </div>
                                <div class="color-box">
                                    <div class="color green"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="buy-container">
                        <div class="price-holder">
                            <h3 class="currency">$</h3>
                            <h3 class="price">1315</h3>
                        </div>
                        <div class="buttons-holder">
                            <a href="#" onclick="return false;" class="btn shop-now-btn active">Shop Now</a>
                            <a href="#" onclick="return false;" class="btn add-to-card-btn">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Review -->
        <div class="review">
            <h2 class="title">Reviews</h2>
            <form action="{{ route('post.review', ['slug' => $product->slug ]) }}" method="POST" id="review-form">
                <div class="row"> 
                    <div class="rating rate-area">
                        <input type="radio" id="5-star" name="crating" value="5">
                        <label for="5-star" title="Amazing"><i class="fas fa-star"></i></label>
                        <input type="radio" id="4-star" name="crating" value="4">
                        <label for="4-star" title="Good"><i class="fas fa-star"></i></label>
                        <input type="radio" id="3-star" name="crating" value="3">
                        <label for="3-star" title="Average"><i class="fas fa-star"></i></label>
                        <input type="radio" id="2-star" name="crating" value="2">
                        <label for="2-star" title="Not Good"><i class="fas fa-star"></i></label>
                        <input type="radio" id="1-star" required="" name="crating" value="1" aria-required="true">
                        <label for="1-star" title="Bad"><i class="fas fa-star"></i></label>

                        @error('rating')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row first-row">
                    <div class="col">
                        <label for="name">Name</label>
                        <input class="review-input" type="text" id="name" placeholder="Type name...">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input class="review-input" type="email" id="email-field" placeholder="Type email...">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row middle-row">
                    <label for="message">Message</label>
                    <textarea class="review-input" name="message" id="message" cols="30" rows="4" placeholder="Type message..."></textarea>
                    @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row last-row">
                    <button class="add-review btn" type="button" data-url="{{ route('post.review', ['slug' => $product->slug ]) }}">Add Review</button>
                </div>
            </form>
            <div class="reviews">
                <div class="insert-review-after-me" style="display: none;"></div>
                @foreach ($product->reviews as $review)
                    <div class="single-review">
                        <h2 class="from"> {{ $review->from }} <span>&lt;</span> {{ $review->email }} <span>&gt;</span></h2>
                        <div class="rating">
                            @for ($i = 0; $i < $review->rating; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                        <p class="message"> {{ $review->message }} </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
        
    <!-- Cart Popup -->
    <div class="cart-popup">
        <div class="outer">
            <div class="inner">
                <div class="col col-left">
                    <div class="img-holder">
                        <img class="product" src="" alt="">
                    </div>
                </div>
                <div class="col col-right">
                    <div class="row first-row">
                        <h2 class="title"></h2>
                    </div>
                    <div class="row middle-row">
                        <div class="col left-col">
                            <h4>Size: </h4>
                            <h4 class="size"></h4>
                        </div>
                        <div class="col right-col">
                            <h4>Color: </h4>
                            <h4 class="color"></h4>
                        </div>
                    </div>
                    <div class="row last-row">
                        <h4 class="cost"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
@push('page-scripts')
    <script>
        function postReview() {
            $(".review .add-review").click(function(){
                let url = $(this).data('url');
                let rating = $('input[name="crating"]:checked').val()
                let name = $('#name').val();
                let email = $('#email-field').val();
                let message = $('#message').val();
                console.log(url,rating, name, email,message);
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        rating: rating,
                        name: name,
                        email: email,
                        message: message
                    },
                    success: function (response) {
                        // response.message
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });
        }

        $( document ).ready(function() {
            postReview();
        });
        
    </script>
@endpush    


