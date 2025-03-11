<!--Slider product Star-->
<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
<div class="col">
    {{-- @foreach ($product->categories as $category )
        
    @endforeach --}}
    <div class="owl-carousel related-carousel">
        @if(isset($products) && count($products) > 0)
        @foreach ($products as $product )
        <div class="product-item bg-light">
            
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="/storage/{{$product->thumbnail}}" alt="">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="">{{$product->title}}</a>
                {{-- <p>{{ strip_tags($product->body) }}</p> --}}
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <!-- <small>(99)</small> -->
                </div>
                <!-- View Details Button -->
                <div class="mt-3">
                    <a href="solar_shop.html" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            </div>
            @endforeach
            @else
            <p>no product available</p>
            @endif
    </div>
    </div>
    <!--Slider product end-->
    
