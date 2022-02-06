<!-- Footer -->
<footer>
    <div class="row first-row">
        <a href="{{ route('home') }}" class="section home active">Начало</a>
        <a href="{{ route('shop') }}" class="section shop">Магазин</a>
        <a href="{{ route('blog') }}" class="section blog">Блог</a>
        <a href="{{ route('contact') }}" class="section contact">Контакти</a>
    </div>
    <div class="row middle-row">
        <div class="col">
            <div class="title-holder">
                <a href="{{ route('home') }}">
                    <img class="title logo" src="{{ asset('./images/logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="content-holder">
                <h4 class="content">
                    „Аxis“ представлява решение за 3D-принтер. Той e "open sourced". В сайта може да бъде намерена
                    информация за това как се използва принтера, както и обща информация за 3D принтирането.</h4>
            </div>
        </div>
        <div class="col">
            <div class="title-holder">
                <h2 class="title">Актуални линкове</h2>
            </div>
            <div class="content-holder">
                <h4 class="content"><a href="{{ route('home') }}">Начало</a></h4>
                <h4 class="content"><a href="{{ route('shop') }}">Магазин</a></h4>
                <h4 class="content"><a href="{{ route('blog') }}">Блог</a></h4>
                <h4 class="content"><a href="{{ route('contact') }}">Контакти</a></h4>
            </div>
        </div>
        <div class="col">
            <div class="title-holder">
                <h2 class="title">Повече информация</h2>
            </div>
            <div class="content-holder">
                <h4 class="content"><a href="">Скоро...</a></h4>
            </div>
        </div>
        <div class="col">
            <div class="title-holder">
                <h2 class="title">Обслужване на клиенти</h2>
            </div>
            <div class="content-holder">
                <h4 class="content"><a href="">Скоро...</a></h4>
            </div>
        </div>
    </div>
    <div class="row last-row">
        <div>
            <p class="rights">© Axis всички права запазени</p>
        </div>
        <div class="social-media">
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
        </div>
    </div>
</footer>

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- JQuery Form --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- Ajax --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- Toast JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- Login Scripts --}}
<script src="{{ asset('js/app.js') }}" defer></script>
{{-- Page Scripts --}}
@stack('page-scripts')
<!-- My Scripts -->
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/product.js') }}"></script>
<script src="{{ asset('js/filter.js') }}"></script>


</body>

</html>
