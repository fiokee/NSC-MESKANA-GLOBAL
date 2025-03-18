(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
            },
            992:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });


    // Related carousel
    $('.related-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            }
        }
    });


    // Product Quantity
    $('.quantity button').on('click', function () {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });


    // AJAX Search Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const searchForm = document.getElementById('search-form');
        const searchQuery = document.getElementById('search-query');
        const productContainer = document.querySelector('.container-fluid.pt-5.pb-3 .row.px-xl-5');
        const sectionTitle = document.querySelector('.section-title .bg-secondary');
        const paginationContainer = document.querySelector('.col-12 nav');
        
        
        // Store the original URL to handle browser history
        const originalUrl = window.location.href;
        
        // Only attach AJAX if the elements exist
        if (searchForm && searchQuery && productContainer) {
            // Handle form submission with AJAX
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const query = searchQuery.value.trim();
                if (query.length > 0) {
                    performSearch(query);
                }
            });
            
            // Optional: Real-time search with debounce
            let debounceTimer;
            searchQuery.addEventListener('input', function() {
                clearTimeout(debounceTimer);
                const query = this.value.trim();
                
                if (query.length >= 3) {
                    // Wait 500ms after user stops typing before searching
                    debounceTimer = setTimeout(() => {
                        performSearch(query);
                    }, 500);
                }
            });
        }
        
        function performSearch(query) {
            // Show loading indicator
            showLoading();
            
            // Update URL with search query (for bookmarking/sharing)
            const searchUrl = `${window.location.pathname}?query=${encodeURIComponent(query)}`;
            window.history.pushState({ query: query }, '', searchUrl);
            
            // Make AJAX request
            fetch(`/products/search?query=${encodeURIComponent(query)}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                // Create a temporary element to parse the HTML
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                
                // Extract the product results
                const newProducts = doc.querySelector('.container-fluid.pt-5.pb-3 .row.px-xl-5').innerHTML;
                productContainer.innerHTML = newProducts;
                
                // Update section title
                if (sectionTitle) {
                    sectionTitle.textContent = `Search Results for "${query}"`;
                }
                
                // Update pagination if it exists
                if (paginationContainer) {
                    const newPagination = doc.querySelector('.col-12 nav');
                    if (newPagination) {
                        paginationContainer.innerHTML = newPagination.innerHTML;
                    } else {
                        paginationContainer.innerHTML = '';
                    }
                }
                
                // Remove loading indicator
                removeLoading();
            })
            .catch(error => {
                console.error('Error during search:', error);
                removeLoading();
                showError();
            });
        }
        
        function showLoading() {
            // Remove any existing loading or error messages
            removeMessages();
            
            // Create loading indicator
            const loadingIndicator = document.createElement('div');
            loadingIndicator.id = 'loading-indicator';
            loadingIndicator.className = 'col-12 text-center py-5';
            loadingIndicator.innerHTML = '<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div><h3 class="mt-3">Searching...</h3>';
            
            // Insert before product container
            productContainer.parentNode.insertBefore(loadingIndicator, productContainer);
            
            // Hide product container while loading
            productContainer.style.display = 'none';
        }
        
        function removeLoading() {
            const loadingIndicator = document.getElementById('loading-indicator');
            if (loadingIndicator) {
                loadingIndicator.remove();
            }
            productContainer.style.display = '';
        }
        
        function showError() {
            const errorMessage = document.createElement('div');
            errorMessage.id = 'error-message';
            errorMessage.className = 'col-12 text-center py-5';
            errorMessage.innerHTML = '<div class="alert alert-danger" role="alert">An error occurred while searching. Please try again.</div>';
            productContainer.parentNode.insertBefore(errorMessage, productContainer);
        }
        
        function removeMessages() {
            const messages = document.querySelectorAll('#loading-indicator, #error-message');
            messages.forEach(message => message.remove());
        }
        
        // Handle browser back/forward buttons
        window.addEventListener('popstate', function(event) {
            if (event.state && event.state.query) {
                searchQuery.value = event.state.query;
                performSearch(event.state.query);
            } else {
                // If no state, we're back at the original page
                window.location.href = originalUrl;
            }
        });
    });

    

    
})(jQuery);

