
<!-- banner-1 section start -->
<section class="banner-1 mt-30 three-item">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6">
                <a href="/category/1">
                    <div class="banner-img has-content body-banner">
                        <img  src="/img/banner/banner61.png" class="w-100" alt="">
                        <div class="banner-top-content">
                            <h4>Virtual Assets</h4>
                            <p>{{count(\App\Models\Item::lastNCategory(100,1))}} + Products</p>
                        </div>

                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-6">
                <a href="/category/2">
                    <div class="banner-img has-content body-banner">
                        <img  src="/img/banner/banner62.png" class="w-100" alt="">
                        <div class="banner-top-content">
                            <h4>Accessories </h4>
                            <p>{{count(\App\Models\Item::lastNCategory(100,2))}} + Products</p>
                        </div>

                    </div>
                </a>
            </div>

           <div class="col-xl-4 col-md-6">
                <a href="/category/3">
                    <div class="banner-img has-content body-banner">
                        <img  src="/img/banner/banner63.png" class="w-100" alt="">
                        <div class="banner-top-content">
                            <h4>Devices</h4>
                            <p>{{count(\App\Models\Item::lastNCategory(100,3))}} + Products</p>
                        </div>

                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- banner-1 section end -->
