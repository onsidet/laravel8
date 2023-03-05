<div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
        <li class="nav-item" >
            <a class="nav-link @yield('dashboard')" aria-current="page" href="{{url('/')}}">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @yield('category')" href="{{url("/category")}}">
                <span data-feather="file" class="align-text-bottom"></span>
                Category
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @yield('product')" href="{{url('/product')}}">
                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                Products
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/customer')}}">
                <span data-feather="users" class="align-text-bottom"></span>
                Customers
            </a>
        </li>
    </ul>
</div>
