<style>
    .hb-menu nav > ul > .hide_shevron > a::after{
        content: "";
    }
</style>
<div class="header-bottom header-sticky d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Header Bottom Menu Area -->
                <div class="hb-menu hb-menu-2 d-xl-block">
                    <nav>
                        <ul>
                            <li class="hide_shevron">
                                <a href="{{ route('home') }}">Home</a>
                            </li>

                            <li class="hide_shevron">
                                <a href="{{ route('shop.index') }}">Shop</a>
                            </li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <!-- Begin Header Bottom Menu Information Area -->
                            <li class="hb-info f-right p-0 d-sm-none d-lg-block">
                                <span>6688 London, Greater London BAS 23JK, UK</span>
                            </li>
                            <!-- Header Bottom Menu Information Area End Here -->
                        </ul>
                    </nav>
                </div>
                <!-- Header Bottom Menu Area End Here -->
            </div>
        </div>
    </div>
</div>
