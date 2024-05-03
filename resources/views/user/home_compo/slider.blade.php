<style>
/*Home Two | Slider Background Image*/
.bg-4 {
	background-image: url({{ asset('user/images/slider/4.jpg') }});
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
	min-height: 475px;
	width: 100%;
}
.bg-5 {
	background-image: url({{ asset('user/images/slider/5.jpg') }});
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
	min-height: 475px;
	width: 100%;
}
.bg-6 {
	background-image: url({{ asset('user/images/slider/7.jpg') }});
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
	min-height: 475px;
	width: 100%;
}
/* .bg-5 {
	background-image: url({{ asset('user/images/images/slider/5.jpg') }});
}
.bg-6 {
	background-image: url({{ asset('user/images/images/slider/6.jpg') }});
} */



</style>
<div class="slider-with-banner">
    <div class="container">
        <div class="row">
            <!-- Begin Category Menu Area -->
            <div class="col-lg-3">
                <!--Category Menu Start-->
                <div class="category-menu">
                    <div class="category-heading">
                        <h2 class="categories-toggle"><span>categories</span></h2>
                    </div>
                    <div id="cate-toggle" class="category-menu-list">
                        <ul>
                            @if (!empty($category) && $category->count() > 0)
                            @foreach ($category as $key => $row)
                            <li class="right-menu">
                                <a href="{{ route('category.product',$row->slug) }}">{{ $row->title }}</a>
                                @if ($row->sub_category->count() > 0)
                                <ul class="cat-mega-menu">
                                    @foreach ($row->sub_category as $sub_category)
                                    <li class="right-menu cat-mega-title">
                                        <a href="{{ route('sub.cat.pro',$sub_category->slug) }}">{{ $sub_category->title }}</a>
                                        <ul>
                                            @foreach ($sub_category->child_category as $child_cate)
                                            <li>
                                                <a href="{{ route('child.cat.pro',$child_cate->slug) }}">{{ $child_cate->title }}</a>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                            @else
                            <li style="color: red">There are no category found !</li>
                            @endif
                        </ul>
                    </div>
                </div>
                    <!--Category Menu End-->
                </div>
                <!-- Category Menu Area End Here -->
                <!-- Begin Slider Area -->
                <div class="col-lg-9">
                    <div class="slider-area pt-sm-30 pt-xs-30">
                        <div class="slider-active owl-carousel">
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left animation-style-02 bg-4">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                    <h2>Chamcham Galaxy S9 | S9+</h2>
                                    <h3>Starting at <span>$589.00</span></h3>
                                    <div class="default-btn slide-btn">
                                        <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide Area End Here -->
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left animation-style-01 bg-5">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                    <h2>Work Desk Surface Studio 2018</h2>
                                    <h3>Starting at <span>$1599.00</span></h3>
                                    <div class="default-btn slide-btn">
                                        <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide Area End Here -->
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left animation-style-02 bg-6">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                    <h2>Phantom 4 Pro+ Obsidian</h2>
                                    <h3>Starting at <span>$809.00</span></h3>
                                    <div class="default-btn slide-btn">
                                        <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Slider Area End Here -->
            </div>
        </div>
    </div>
