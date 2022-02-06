<div class="cart">
    <div class="outer">
        <div class="inner">
            <div class="content">
                <div class="top">
                    <div class="button-holder minimize-cart-btn">
                        <a class="minimize-cart-btn" href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <h2 class="cart-title">Количка</h2>
                </div>
                <div class="items-holder" data-default-width="">
                    {{-- <div class="item" data-id="0">
                        <div class="product-image-holder">
                            <img class="product-image" src="{{ asset('./images/product_image.png') }}" alt="" >
                        </div>
                        <div class="product-information">
                            <div class="row">
                                <h2 class="title"> BasketBall</h2>
                            </div>
                            <div class="row">
                                <div class="size-holder">
                                    <h3>Size: </h3>
                                    <div class="Size">
    
                                    </div>
                                </div>
                                <div class="color-holder">
                                    <h3>Color: </h3>
                                    <div class="color">
    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h3 class="price">$300</h3>
                            </div>
                        </div>
                        <div class="quantity">
                            <a class="increase circle" href="#"><i class="fas fa-plus"></i></a>
                            <div class="number-holder">
                                <h4 class="number">2</h4>
                            </div>
                            <a class="decrease circle" href="#"><i class="fas fa-minus"></i></a>
                        </div>
                    </div> --}}
                    <div class="insert-before-me" style="display: none"></div>
                </div>
                <div class="bottom">
                    <div class="total">

                        <div class="total-holder">
                            <h2 class="text-2xl" id="amount">Общо: {{ \Cart::getTotal() }} лв.</h2>
                        </div>
                        <div class="button-holder">
                            <form method="POST" action="{{ route('shop.purchase', $product->id) }}"
                                class="card-form mt-3 mb-3">
                                @csrf
                                <input type="hidden" name="payment_method" class="payment-method">
                                {{-- <input class="StripeElement mb-3" name="card_holder_name" placeholder="Card holder name" required> --}}
                                {{-- <div class="col-lg-4 col-md-6">
                                        <div id="card-element"></div>
                                    </div> --}}
                                <div id="card-errors" role="alert"></div>
                                <div class="form-group mt-3">
                                    <button type="submit"
                                        class="py-2 px-4 mt-5 mr-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white text-white hover:text-blue-500 hover:text-blue transition ease-in duration-200 text-center text-base font-semibold focus:outline-none rounded-lg   pay"
                                        style="cursor: pointer;">
                                        Плати
                                    </button>
                                </div>
                            </form>

                            {{-- <button type="button"
                                class="py-2 px-4 mt-5 mr-4 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white text-white hover:text-blue-500
                         hover:text-blue transition ease-in duration-200 text-center text-base font-semibold focus:outline-none rounded-lg ">
                                <a href="{{ route('home') }}">Плати</a>
                            </button> --}}
                        </div>

                        {{-- <h2 class="title"></h2>
                        <div class="content">
                            <div class="col left-col">
                                <h3 class="subtotal">Subtotal: </h3>
                                <h3 class="shipping">Shipping: </h3>
                                <h3 class="estimate-total">Estimate Total: </h3>
                            </div>
                            <div class="col right-col">
                                <div class="discount-">

                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="total-holder">
    
                    </div>
                    <div class="buttons-holder">
                        <a href="" class="btn">Continue Shopping</a>
                        <a href="" class="btn">Purchase</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@push('page-scripts')
    <script>
        function setDefaultProductImageSize() {
            var cw = $('.product-image').width();
            $('.cart .items-holder').attr("data-default-width", cw);
        }

        function heightSameAsWidth() {
            // var cw = $('.base-product-image').width();
            // alert(cw);
            // $('.product-image').each(function( item ) {
            //     $(this).css({'height':cw+'px'});
            // });
            // $('.product-image').each(function( item ) {
            //     $(this).css({'width':'unset'});
            // });
            // $('.product-image').css({'height':cw+'px'}).css({'width':'unset'});
        }

        function openCart() {
            $(".fas.fa-shopping-cart").click(function() {
                $('.cart').addClass('active');
            });
        }

        function minimizeCart() {
            $(".minimize-cart-btn").click(function() {
                $('.cart').removeClass('active');
            });
        }

        function insertInCart(product) {
            let html =
                `<div class="item" data-id="${product.id}">
                    <div class="product-image-holder">
                        <img class="product-image" src="{{ asset('./images/product_image.png') }}" alt="">
                    </div>
                    <div class="product-information">
                        <div class="row">
                            <h2 class="title">${product.name}</h2>
                        </div>
                        <div class="row">
                            {{-- size & color --}}
                            <div class="size-holder">
                                <h3>Size: </h3>
                                <div class="Size">

                                </div>
                            </div>
                            <div class="color-holder">
                                <h3>Color: </h3>
                                <div class="color">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h3 class="price">$${product.price}</h3>
                        </div>
                    </div>
                    <div class="quantity">
                        <a class="increase circle" href="#"><i class="fas fa-plus"></i></a>
                        <div class="number-holder">
                            <h4 class="number">${product.quantity}</h4>
                        </div>
                        <a class="decrease circle" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                </div>`;

            $(html).insertBefore('.insert-before-me');
        }

        function increaseProductQuantity() {
            $(document).on('click', '.increase', function() {
                let product = $(this).parent().parent().data('id');
                // todo validate for non negative number
                let quantity = $(this).parent().data('quantity') + 1;

                updateCart(product, quantity);
            });
        }

        function decreaseProductQuantity() {
            $(document).on('click', '.decrease', function() {
                let product = $(this).parent().parent().data('id');
                // todo validate for non negative number
                let quantity = $(this).parent().data('quantity') - 1;

                updateCart(product, quantity);
            });
        }

        function updateCart(product, quantity) {
            let url = window.location.origin + '/update-cart';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: url,
                data: {
                    id: product,
                    quantity: quantity,
                },
                success: function(response) {
                    if (response.status == 'success') {
                        let itemToInsertBefore = `<div class="insert-before-me" style="display: none"></div>`;
                        $('.cart .items-holder').empty().append(itemToInsertBefore);

                        Object.keys(response.cartItems).forEach(function(product) {
                            insertInCart(response.cartItems[product]);
                        });

                        let amount = `Общо: ${response.amountTotal}лв.`;
                        $('#amount').text(amount);
                    }
                },
                error: function(response) {
                    let errors = JSON.parse(response.responseText);

                    toastr.error(errors.message);
                }
            });
        }

        function fixProductImageSize() {

        }

        function addToCart() {
            $(".add-card-btn").click(function() {
                let url = "{{ route('cart.store') }}";

                let productId = "{{ $product->id }}";
                let productName = "{{ $product->name }}";
                let productPrice = "{{ $product->price }}";
                let productImage = "{{ $product->defaultImage->fullpath }}";
                let productQuantity = 1;

                // let productSize = $('.product .size-container .size.active h4').text();
                // let productColor = $('.product .size-container .color-box.active .color').attr('class').split(' ')[
                //     1];
                let productSize = "M";
                let productColor = "red";


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        id: productId,
                        name: productName,
                        price: productPrice,
                        quantity: productQuantity,
                        image: productImage,
                        color: productColor,
                        size: productSize
                    },
                    success: function(response) {
                        // alert(response);
                        // if (response.status == 'success') {
                        //     Object.keys(response.cartItems).forEach(function(product) {
                        //         insertInCart(response.cartItems[product]);
                        //     });

                        //     heightSameAsWidth();
                        // }

                        let itemToInsertBefore =
                            `<div class="insert-before-me" style="display: none"></div>`;
                        $('.cart .items-holder').empty().append(itemToInsertBefore);

                        Object.keys(response.cartItems).forEach(function(product) {
                            insertInCart(response.cartItems[product]);
                        });

                        // response.message
                        // todo create a popup messege for success
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });
        }

        $(document).ready(function() {
            // make the product image height to be the same as its width -> to create a box
            setDefaultProductImageSize();
            heightSameAsWidth();


            openCart();
            minimizeCart();
            addToCart();

            increaseProductQuantity();
            decreaseProductQuantity();
        });
    </script>
@endpush
