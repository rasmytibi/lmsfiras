
<!-- footer section -->
<footer class="footer-section spad pb-0">
    <div class="footer-top">
        <div class="footer-warp">
            <div class="row">
                <div class="widget-item">
                    <h4>Contact Info</h4>
                    <ul class="contact-list">
                        <li>{{$setting->address}} </li>
                        <li>{{$setting->phone}}</li>
                        <li>{{$setting->email}}</li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Engeneering</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Graphic Design</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Development</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Newsletter</h4>
                    @include("shared.msg")
                    <form action="{{route('email')}}" method="post" class="footer-newslatter" >
                        @csrf
                        <input type="email" name="email"  placeholder="Enter your mail">

                        <button type="submit">Subscribe</button>
                    </form>
                    <p class="newsletter_text">Subscribe newsletter to get updates</p>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-warp">
            <ul class="footer-menu">
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
            <div class="copyright"><a target="_blank" href="/">Rasmy Tibi & Rana Abbsi</a></div>
        </div>
    </div>
</footer>
<!-- footer section end -->
