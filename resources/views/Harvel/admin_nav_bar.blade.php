    <nav>
        <a href="http://127.0.0.1:8000/"><img src="/image/logo.png" style="width: 60%"></a>
    <div class="nav-link" id="navlink">
        <ul>
            <li><a href="{{route('product.index')}}">Product</a></li>
            <li><a href="{{route('category.index')}}">Category</a></li>
            <li><a href="{{route('customer.index')}}">Customer</a></li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="{{route('admin.index')}}">
                    <i class="fa fa-user"></i>
                    {{\Illuminate\Support\Facades\Session::has('username')?\Illuminate\Support\Facades\Session::get('username'):''}}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('auth.signout')}}">
                    <i class="bi bi-box-arrow-left"></i><a href="{{route('auth.signin')}}">Logout</a>
                </a>
            </li>
        </ul>
    </div>
</nav>
