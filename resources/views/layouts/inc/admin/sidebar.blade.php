<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/category') }}">
                <i class="bi bi-person"></i>
                <span>Category</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/brends') }}">
                <i class="bi bi-person"></i>
                <span>Brend</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/product') }}">
                <i class="bi bi-person"></i>
                <span>Product</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/colors') }}">
                <i class="bi bi-person"></i>
                <span>Color</span>
            </a>
        </li>
          

    </ul>

</aside>