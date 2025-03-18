<!-- In your components/shop.blade.php file -->
<x-app-layout :meta-title="$category->title ?? 'Search Results'">
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    @if(isset($category))
                        <a class="breadcrumb-item text-dark" href="#">{{$category->title}} Shop</a>
                        <span class="breadcrumb-item active">{{$category->title}} List</span>
                    @else
                        <span class="breadcrumb-item active">Search Results</span>
                    @endif
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div class="d-flex justify-content-center align-items-center">
    <div class="col-lg-6 col-8 text-center">
    <form id="search-form" class="mb-4" action="{{ route('products.search') }}" method="GET">
        <div class="input-group">
            <input type="text" id="search-query" name="query" class="form-control" placeholder="Search for products" value="{{ $query ?? '' }}">
            <div class="input-group-append">
                <button type="submit" class="input-group-text bg-transparent text-primary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    </div>
    </div>
    
    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5" id="product-list">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-2 col-md-4">
                <!-- Sidebar content here -->
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="container-fluid pt-5 pb-3">
                <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                    <span class="bg-secondary pr-3">
                        @if(isset($category))
                            {{$category->title}} Products
                        @elseif(isset($query))
                            Search Results for "{{ $query }}"
                        @else
                            Products
                        @endif
                    </span>
                </h2>
                
                <div class="row px-xl-5">
                    @if(count($products) > 0)
                        @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    @php
                                     $thumbnails = is_array($product->thumbnail) ? $product->thumbnail : [$product->thumbnail];
                                     @endphp
                                    @if (!empty($product->thumbnail) && is_array($product->thumbnail))
                                    <img class="img-fluid w-100" src=" {{ asset('storage/' . $product->thumbnail[0]) }}" alt="{{$product->title}}">
                                    @endif
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href="#">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="text-center py-4">
                                    <h2 class="h6 text-decoration-none text-truncate" href="#">{{ $product->title }}</h2>
                                    <div class="d-flex align-items-center mt-2">
                                        <p class="text-muted ml-2">
                                            {{$product->shortBody()}}
                                        </p>
                                    </div>
                                    
                                    <a class="btn" 
                                        href="https://api.whatsapp.com/send?phone=2348146901808&text={{ urlencode('Hello, I want to order ' . $product->title . ' from ' . url()->current() . ' Image: ' . asset($product->thumbnail[0])) }}" 
                                        target="_blank">
                                            <h5 class="btn btn-primary">Order via WhatsApp</h5>
                                            <i class="fab fa-whatsapp" style="font-size: 40px; color: #25D366;"></i>
                                        </a>

                                    
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <a
                                         href="{{route('product.detail',['product' => $product->slug])}}" 
                                         class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="col-12 text-center py-5">
                            <h3>No products found matching your search.</h3>
                        </div>
                    @endif
                </div>
            
                <!-- Pagination -->
                @if(count($products) > 0 && method_exists($products, 'links'))
                <div class="col-12">
                    {{ $products->links() }}
                </div>
                @endif
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
</x-app-layout>