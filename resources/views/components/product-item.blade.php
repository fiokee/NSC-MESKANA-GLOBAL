<!-- Slider Product Start -->
<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
    <span class="bg-secondary pr-3">Featured Products</span>
</h2>
<div class="col">
    <div class="owl-carousel related-carousel">
        @if(isset($products) && count($products) > 0)
            @foreach ($products as $product)
                <div class="product-item bg-light">
                    <div class="product-img position-relative overflow-hidden">
                        @php
                            $thumbnail = is_array($product->thumbnail) ? $product->thumbnail[0] : $product->thumbnail;
                        @endphp

                        @if($thumbnail)
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $thumbnail) }}" alt="{{ $product->title }}">
                            
                            {{-- production image
                            <img class="img-fluid w-100" src="{{url('meskana-ecomms/storage/app/public/'.$thumbnail)}}" loading="lazy" alt="{{ $product->title }}"> --}}
                        @else
                            <img class="img-fluid w-100" src="{{ asset('storage/default.jpg') }}" alt="Default Image">
                        @endif

                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="#"><i class="far fa-heart"></i></a>
                        </div>
                    </div>

                    <div class="text-center py-4">
                        <h2 class="h6 text-decoration-none text-truncate" href="#">
                            {{ $product->title }}
                        </h2>

                        <div class="d-flex align-items-center justify-content-center mb-1">
                            @php
                                $rating = $product->rating ?? 5; // Default to 5 stars if no rating
                            @endphp
                            @for ($i = 0; $i < 5; $i++)
                                <small class="fa fa-star {{ $i < $rating ? 'text-primary' : 'text-secondary' }} mr-1"></small>
                            @endfor
                        </div>

                        <!-- View Details Button -->
                        <div class="mt-3">
                            @foreach ($product->categories as $category)
                                <a href="{{ route('by-category', $category->slug) }}" class="btn btn-primary">
                                    Shop Now
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center">No products available</p>
        @endif
    </div>
</div>
<!-- Slider Product End -->
