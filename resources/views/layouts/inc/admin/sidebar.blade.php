<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('admin/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/') }}">
                <i class="bi bi-house"></i>
                <span>Home page</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/users') }}">
                <i class="bi bi-person"></i>
                <span>Users</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/category') }}">
                <i class="bi bi-bookmark-check"></i>
                <span>Category</span>
            </a>
        </li>

        
        
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/product') }}">
                <i class="bi bi-cart"></i>
                <span>Product</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/slider') }}">
                <i class="bi bi-sliders"></i>
                <span>Slider</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/orders') }}">
                <i class="bi bi-bag"></i>
                <span>Orders</span>
            </a>
        </li>


    </ul>

</aside>