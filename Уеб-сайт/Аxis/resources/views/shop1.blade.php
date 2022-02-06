@extends('common_template')

@section('content')

    <!-- Main Content -->
    <!-- Product card section -->
    <div id="main-content">
        <div id="product-card"> 
            <!-- left side -->
            <div class="pictures-container">
                <div class="display-img">
                    <img src="{{ asset('./images/iphone.jpg') }}" alt="black dress">
                </div>
                <div class="preview-img">
                    <div style=" display: flex; margin-top: 3rem;">
                        <a style="cursor: pointer;"><img src="{{ asset('./images/iphone.jpg') }}" alt="black dress"></a>
                        <a style="cursor: pointer;"><img src="{{ asset('./images/iphone.jpg') }}" alt="iphone-12"></a>
                        <a style="cursor: pointer;"><img src="{{ asset('./images/iphone.jpg') }}" alt="iphone-12"></a>
                        <a style="cursor: pointer;"><img src="{{ asset('./images/iphone.jpg') }}" alt="iphone-12"></a>
                        <a style="cursor: pointer;"><img src="{{ asset('./images/iphone.jpg') }}" alt="iphone-12"></a>
                    </div>
                </div>
            </div>
            <!-- right side -->
            <div class="information-container">
                <div class="information-container-heading">
                    <p>Наличен</p>
                    <i style="cursor: pointer;" class="fas fa-heart hidden heart-clicked"></i>
                    <i style="cursor: pointer;" class="far fa-heart heart-not-clicked"></i>
                </div>
                <div class="product-name">
                    <h2>Axis</h2>
                    <h2>3D принтер</h2>
                    <div>
                        <div>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <a href="#reviews" style="cursor: pointer;">Виж ревюта</a>
                        </div>
                    </div>
                </div>
                <div class="info-boxes">
                    <div>
                        <a style="cursor: pointer;" class="first-tab selected-info links-hover">Инфо</a>
                        <a style="cursor: pointer;" class="second-tab links-hover">Съдържание</a>
                        <a style="cursor: pointer;" class="third-tab links-hover">Доставка</a>
                    </div>
                    <p class="first-tab-info">Основният хардуер, който управлява принтера е Arduino Mega 2560, RAMPS 1.4,
                        a4988 driver. Софтуерът инсталиран на принтера е Marlin версия 1.1.</p>

                    <p class="hidden secound-tab-info">Комплекта съдържа:
                        <span class="block">- Аxis</span>
                        <span class="block">- Филамент от ABS пластмаса</span>
                    </p>

                    <p class="hidden third-tab-info">Доставката на Axis отнема около 1 седмица до посочен от клиента адрес.
                        Axis идва опакован в предпазваща го от удари при пътуването кутия изработена от твърд
                        висококачествен картон.</p>
                </div>
                <div class="custom-settings">
                    <div class="size-settings">
                        <div class="title">
                            <p>Дължина на филамента</p>
                            <p class="colored"></p>
                        </div>
                        <div class="values">
                            <a style="cursor: pointer;">10м</a>
                            <a class="selected-size" style="cursor: pointer;">25м</a>
                            <a style="cursor: pointer;">50м</a>
                        </div>
                    </div>
                    <div class="color-settings">
                        <div class="color-title">
                            <p>Цвят на филамента</p>
                        </div>
                        <div class="colors">
                            <div>
                                <a style="cursor: pointer;" class="black" data-color="black">c</a>
                            </div>
                            <div class="selected">
                                <a style="cursor: pointer;" class="blue" data-color="blue">c</a>
                            </div>
                            <div>
                                <a style="cursor: pointer;" class="green" data-color="green">c</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="final-actions">
                    <p><sub>$</sub> {{ $product->price }}</p>

                    <form method="POST" action="{{ route('shop.purchase', $product->id) }}" class="card-form mt-3 mb-3">
                        @csrf
                        <input type="hidden" name="payment_method" class="payment-method">
                        {{-- <input class="StripeElement mb-3" name="card_holder_name" placeholder="Card holder name" required> --}}
                        {{-- <div class="col-lg-4 col-md-6">
                            <div id="card-element"></div>
                        </div> --}}
                        <div id="card-errors" role="alert"></div>
                        <div class="form-group">
                            <button type="submit" class="btn-main btn-primary pay" style="cursor: pointer;">
                                Купи сега
                            </button>
                        </div>
                    </form>

                    {{-- <a style="cursor: pointer;" class="btn-main">Купи сега</a> --}}
                    <a style="cursor: pointer;" class="btn-secondary add-card-btn add-to-card-btn" id="addtocart">Добави в количка</a>
                </div>

            </div>
        </div>

        <!-- review-card -->
        <div class="review-card" id="reviews">
            <div class="form">
                <h2>Рецензии</h2>
                <div class="rating rate-area">
                    <input type="radio" id="1-star" name="crating" value="1">
                    <label for="1-star" title="Amazing"><i class="fas fa-star"></i></label>
                    <input type="radio" id="2-star" name="crating" value="2">
                    <label for="2-star" title="Good"><i class="fas fa-star"></i></label>
                    <input type="radio" id="3-star" name="crating" value="3">
                    <label for="3-star" title="Average"><i class="fas fa-star"></i></label>
                    <input type="radio" id="4-star" name="crating" value="4">
                    <label for="4-star" title="Not Good"><i class="fas fa-star"></i></label>
                    <input type="radio" id="5-star" required="" name="crating" value="5" aria-required="true">
                    <label for="5-star" title="Bad"><i class="fas fa-star"></i></label>
                </div>
                <div class="inputs-container">
                    <div class="name">
                        <div>
                            <label for="name">Име</label>
                            <input type="text" class="name-input" placeholder="Въведете вашето име..." id="name">
                        </div>
                        <div>
                            <label for="message">E-mail</label>
                            <input type="email" class="mail-input" placeholder="Въведете вашият Е-mail..."
                                id="email-field">
                        </div>
                    </div>
                    <div class="message">
                        <label for="message">Съобщение</label>
                        <textarea name="message" placeholder="Въведете вашето съобщение..." class="msg-input" cols="30"
                            rows="10" id="message"></textarea>
                        <div class="submit-btn">
                            <!-- <a style="cursor: pointer;" class="btn-secondary add-review-btn">Добави Рецензия</a> -->
                            <button type="submit"
                                class="py-2 px-4 mt-2 mb-2 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white text-white hover:text-blue-500 hover:text-blue transition ease-in duration-200 text-center text-base font-semibold rounded-lg add-review-btn">
                                Добави
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-list">
                <div class="insert-review-after-me" style="display: none"></div>
                @foreach ($product->reviews as $review)
                    <div class="review">
                        <h2>
                            {{ $review->from }}
                            <span> {{ $review->email }} <span>>

                                </span>
                        </h2>
                        <div>
                            @for ($i = 0; $i < $review->rating; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                        <p> {{ $review->message }} </p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@auth
    @push('page-scripts')
        {{-- Payment --}}
        <script src="https://js.stripe.com/v3/"></script>
        <script>
            function payment() {
                let stripe = Stripe("{{ env('STRIPE_KEY') }}")
                let elements = stripe.elements()
                let style = {
                    base: {
                        color: '#32325d',
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: 'antialiased',
                        fontSize: '16px',
                        '::placeholder': {
                            color: '#aab7c4'
                        }
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a'
                    }
                }
                let card = elements.create('card', {
                    style: style
                })
                card.mount('#card-element')
                let paymentMethod = null
                $('.card-form').on('submit', function(e) {
                    $('button.pay').attr('disabled', true)
                    if (paymentMethod) {
                        return true
                    }
                    // stripe.confirmCardSetup(
                    //     "{{ $intent->client_secret }}", {
                    //         payment_method: {
                    //             card: card,
                    //             billing_details: {
                    //                 name: $('.card_holder_name').val()
                    //             }
                    //         }
                    //     }
                    // ).then(function(result) {
                    //     if (result.error) {
                    //         $('#card-errors').text(result.error.message)
                    //         $('button.pay').removeAttr('disabled')
                    //     } else {
                    //         paymentMethod = result.setupIntent.payment_method
                    //         $('.payment-method').val(paymentMethod)
                    //         $('.card-form').submit()
                    //     }
                    // })

                    paymentMethod = result.setupIntent.payment_method
                    $('.payment-method').val(paymentMethod)
                    // $('.card-form').submit()

                    return false
                })
            }

            $(document).ready(function() {
                payment();
            });
        </script>
    @endpush
@endauth

@guest
    <script>
        function checkForGuestPayment() {
            $('.card-form').on('submit', function(e) {
                e.preventDefault();

                $('.login-register').addClass('active');
                $('.cart').removeClass('active');

                toastr.success('Трябва да сте логнат, за да завършите поръчката.');

                return false;
            });
        }

        $(document).ready(function() {
            checkForGuestPayment();
        });
    </script>
@endguest

@push('page-scripts')
    <script>
        function addReviewToDOM(data) {
            let reviewHtml = `
                <div class="review">
                    <h2>
                        ${ data.name }
                        <span>
                            << /span>${ data.email }<span>>
                        </span>
                    </h2>
                    <div>
                        ${ '<i class="fas fa-star"></i>'.repeat( data.rating ) }
                    </div>
                    <p>
                        ${ data.message }
                    </p>
                </div>`;

            $(reviewHtml).insertAfter('.insert-review-after-me');
        }

        function postReview() {
            $(".add-review-btn").click(function() {
                let url = " {{ route('post.review', ['slug' => $product->slug]) }}";
                let rating = 4;
                let name = $('#name').val();
                let email = $('#email-field').val();
                let message = $('#message').val();
                let data = {
                    'name': name,
                    'email': email,
                    'message': message,
                    'rating': rating
                };

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
                    success: function(response) {
                        addReviewToDOM(data);
                        $(':input', '.review-card')
                            .not(':button, :submit, :reset, :hidden')
                            .val('')
                            .prop('checked', false)
                            .prop('selected', false);
                        toastr.success(response.message);
                    },
                    error: function(response) {
                        let errors = JSON.parse(response.responseText);

                        for (const [key, value] of Object.entries(errors.message)) {
                            for (const [mkey, mvalue] of Object.entries(value)) {
                                toastr.error(mvalue, key);
                            }
                        }
                    }
                });
            });
        }

        $(document).ready(function() {
            postReview();
            checkForGuestPayment();
        });
    </script>
@endpush
