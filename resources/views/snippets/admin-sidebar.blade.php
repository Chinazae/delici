<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll dz-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    {{-- <li><a href="orders.html">Orders</a></li>
                    <li><a href="order-id.html">Order ID</a></li>
                    <li><a href="general-customers.html">General Customers</a></li>
                    <li><a href="analytics.html">Analytics</a></li>
                    <li><a href="reviews.html">Reviews</a></li> --}}
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Category</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('table-categories.create')}}">Add Category</a></li>
                    {{-- <li><a href="post-details.html">Post Details</a></li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app-calender.html">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom-product-grid.html">Product Grid</a></li>
                            <li><a href="ecom-product-list.html">Product List</a></li>
                            <li><a href="ecom-product-detail.html">Product Details</a></li>
                            <li><a href="ecom-product-order.html">Order</a></li>
                            <li><a href="ecom-checkout.html">Checkout</a></li>
                            <li><a href="ecom-invoice.html">Invoice</a></li>
                            <li><a href="ecom-customers.html">Customers</a></li>
                        </ul>
                    </li>--}}
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">Tables
                        {{-- <span class="badge badge-sm badge-danger ms-3">New</span> --}}
                    </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('tables.create')}}">Add Table</a></li>
                    <li><a href="{{route('tables.index')}}">Table Lists</a></li>

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                    <i class="flaticon-381-database-1"></i>
                    <span class="nav-text">Reservations
                        {{-- <span class="badge badge-sm badge-danger ms-3">New</span> --}}
                    </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.reservations.index')}}">Reservation Lists</a></li>
                    {{-- <li><a href="content-add.html">Add Content</a></li>
                    <li><a href="menu.html">Menus</a></li>
                    <li><a href="email-template.html">Email Template</a></li>
                    <li><a href="add-email.html">Add Email</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="add-blog.html">Add Blog</a></li>
                    <li><a href="blog-category.html">Blog Category</a></li> --}}
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Coupons</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('coupons.create')}}">Add Coupon</a></li>
                    <li><a href="{{route('coupons.index')}}">Coupon Lists</a></li>
                    {{-- <li><a href="chart-chartjs.html">Chartjs</a></li>
                    <li><a href="chart-chartist.html">Chartist</a></li>
                    <li><a href="chart-sparkline.html">Sparkline</a></li>
                    <li><a href="chart-peity.html">Peity</a></li> --}}
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Reviews</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.reviews.index')}}">Review Lists</a></li>
                    {{-- <li><a href="ui-alert.html">Alert</a></li>
                    <li><a href="ui-badge.html">Badge</a></li>
                    <li><a href="ui-button.html">Button</a></li>
                    <li><a href="ui-modal.html">Modal</a></li>
                    <li><a href="ui-button-group.html">Button Group</a></li>
                    <li><a href="ui-list-group.html">List Group</a></li>
                    <li><a href="ui-media-object.html">Media Object</a></li>
                    <li><a href="ui-card.html">Cards</a></li>
                    <li><a href="ui-carousel.html">Carousel</a></li>
                    <li><a href="ui-dropdown.html">Dropdown</a></li>
                    <li><a href="ui-popover.html">Popover</a></li>
                    <li><a href="ui-progressbar.html">Progressbar</a></li>
                    <li><a href="ui-tab.html">Tab</a></li>
                    <li><a href="ui-typography.html">Typography</a></li>
                    <li><a href="ui-pagination.html">Pagination</a></li>
                    <li><a href="ui-grid.html">Grid</a></li> --}}

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Event Bookings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.event_bookings.index')}}">Manage Event Bookings</a></li>
                    {{-- <li><a href="uc-nestable.html">Nestedable</a></li>
                    <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="uc-toastr.html">Toastr</a></li>
                    <li><a href="map-jqvmap.html">Jqv Map</a></li>
                    <li><a href="uc-lightgallery.html">Lightgallery</a></li> --}}
                </ul>
            </li>
            {{-- <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text"></span>
                </a>
            </li> --}}
            <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Blog Posts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.blog.create')}}">Add Blog Posts</a></li>
                    <li><a href="{{route('admin.blog.index')}}">Manage Blog Posts</a></li>
                    {{-- <li><a href="form-editor.html">Form Editor</a></li>
                    <li><a href="form-pickers.html">Pickers</a></li>
                    <li><a href="form-validation-jquery.html">Jquery Validate</a></li> --}}
                </ul>
            </li>
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                </ul>
            </li> --}}
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="page-register.html">Register</a></li>
                    <li><a href="page-login.html">Login</a></li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="page-error-400.html">Error 400</a></li>
                            <li><a href="page-error-403.html">Error 403</a></li>
                            <li><a href="page-error-404.html">Error 404</a></li>
                            <li><a href="page-error-500.html">Error 500</a></li>
                            <li><a href="page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li>
        </ul>
        <div class="add-menu-sidebar">
            <img src="images/food-serving.png" alt="/">
            <p class="mb-3">Organize your menus through button bellow</p>
            <span class="fs-12 d-block mb-3">Lorem ipsum dolor sit amet</span>
            <a href="javascript:void(0)" class="btn btn-secondary btn-rounded" data-bs-toggle="modal"
                data-bs-target="#addOrderModalside">+Add Menus</a>
        </div>
        <div class="copyright">
            <p><strong>Sego Restaurant Admin Dashboard</strong> © 2023 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by DexignZone</p>
        </div>--}}
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->