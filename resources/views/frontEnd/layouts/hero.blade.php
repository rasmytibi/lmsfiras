
<!-- Hero section -->
<section class="hero-section set-bg" data-setbg={{asset("frontEnd/img/bg.jpg")}}>
    <div class="container">
        <div class="hero-text text-white">
            <h2>Get The Best Free Online Courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla <br> dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                @include("shared.msg2")
                @if(!auth()->check())
                <form class="intro-newslatter" method="POST" action="{{route("student-register")}}">
                    @csrf
                    <input type="text" placeholder="Name" name="name">
                    <input type="text" class="last-s" placeholder="E-mail" name="email">
                    <input type="password"  placeholder="Password" name="password">
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">

                    <button class="site-btn">Sign Up Now Student</button>
                </form>
                    @else


                    <h2 style="font-weight: bold;color: white;text-align: center" >
                        Welcome Dear
                        {{auth()->user()->name}}
                        In Our E-Learning Site</h2>

                @endif
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->
