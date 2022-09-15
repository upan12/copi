@extends('layouts.main')
@section('container')
    <!-- Login -->
    <!-- <div class="login-form">
                <form action="">
                    <div id="close-login-form" class="fas fa-times"></div>
                    <a href="#" class="logo">
                        <img src="/images/logo.png" alt="">
                    </a>
                    <h3>let's ngopi ngopi</h3>
                    <input type="email" name="" placeholder="enter your email" id="" class="box">
                    <input type="password" name="" placeholder="enter your password" id="" class="box">
                    <div class="flex">
                        <input type="checkbox" name="" id="remember-me">
                        <label for="remember-me">remember me</label>
                        <a href="">forgot password?</a>
                    </div>
                    <input type="submit" value="login now" class="link-btn">
                    <p class="account">Don't have an account? <a href="#">create one!</a></p>
                </form>
            </div> -->
    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>fresh coffee in the morning</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat labore, sint cupiditate distinctio tempora
                reiciendis.</p>
            <a href="#menu" class="btn">Order Menu</a>
            <a href="#products" class="btn">Order Product</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="/images/about-img.jpeg" alt="">
            </div>

            <div class="content">
                <h3>what makes our coffee special?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum
                    fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas
                    culpa! Neque consectetur obcaecati sapiente?</p>
                {{-- <a href="#" class="btn">learn more</a> --}}
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h1 class="heading"> our <span>menu</span> </h1>
        @if ($menus->count())
        <div class="box-container">
            @foreach ($menus as $menu)
                <div class="box">
                    <img src="/images/menu-1.png" alt="">
                    <h3>{{ $menu->name }}</h3>
                    <div class="price">Rp {{ $menu->price }} <span>8.913.749.032.804</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            @endforeach

        </div>
        @else
        <h3 class="" style="color: aliceblue; text-align:center; font-size:25px;">No Menu found</h3>
        @endif

    </section>

    <!-- menu section ends -->
    <section class="products" id="products">

        <h1 class="heading"> our <span>products</span> </h1>
        

        @if ($products->count())
            <div class="box-container">
                @foreach ($products as $product)
                    <div class="box">
                        <div class="icons">
                            <a href="#" class="fas fa-shopping-cart"></a>
                            {{-- <a href="#" class="fas fa-heart"></a> --}}
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="/images/product-1.png" alt="">
                        </div>
                        <div class="content">
                            <h3>{{ $product->name }}</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">Rp {{ $product->price }} <span>Rp 9.290.382.109</span></div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
        <h3 class="" style="color: aliceblue; text-align:center; font-size:25px;">No product found</h3>
        @endif

    </section>

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="/images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis?
                    Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
                <img src="/images/pic-1.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="/images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis?
                    Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
                <img src="/images/pic-2.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="/images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis?
                    Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
                <img src="/images/pic-3.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1974.3222122940144!2d114.3548433!3d-8.2384639!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5dc20e99a907ceae!2sCv.%20Pixel%20Space%20Creative!5e0!3m2!1sid!2sid!4v1662782936750!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="/pesan" method="POST" target="_blank">
                @csrf
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" name="name" placeholder="name" required>
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" name="email" placeholder="email" required>
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="text" name="pesan" placeholder="Message" required>
                </div>
                <input type="hidden" name="noWa" value="+62 851-0512-0605">
                {{-- <input type="submit" value="contact now" target="_blank" class="btn"> --}}
                <button type="submit" class="btn">contact now</button>
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

        @foreach ($blogs as $blog)
            
        <div class="box">
            <div class="image">
                <img src="/images/blog-1.jpeg" alt="">
            </div>
            <div class="content">
                <a href="/blog?slug={{ $blog->slug }}" class="title">{{ $blog->title }}</a>
                <span>{{ $blog->created_at->diffForHumans() }}</span>
                <p>{{ $blog->excerpt }}</p>
                <a href="/{{ $blog->slug }}" class="btn">read more</a>
            </div>
        </div>
        @endforeach

    </div>

        </div>

    </section>

    <!-- blogs section ends -->
@endsection
