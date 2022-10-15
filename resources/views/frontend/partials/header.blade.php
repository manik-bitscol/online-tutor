<header class="header-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-3">
                <div class="logo">
                    <h1 class="m-0 p-0">Logo</h1>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 m-0 p-0">
                <nav class="d-flex justify-content-end align-content-center">
                    <ul class="list-unstyled d-flex m-0 p-0 align-content-center">
                        <li class="mx-1 menu-item"><a class="px-3 py-2 d-flex justify-content-center align-items-center text-decoration-none text-white menu-link" href="">Home</a></li>
                        <li class="mx-1 menu-item"><a class="px-3 py-2 d-flex justify-content-center align-items-center text-decoration-none text-white menu-link" href="">Dashboard</a></li>
                        <li class="mx-1 menu-item"><a class="px-3 py-2 d-flex justify-content-center align-items-center text-decoration-none text-white menu-link" href="">Job Circular</a></li>
                        
                        @if(Auth::check())
                        <li class="mx-1 menu-item">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit" class="px-3 text-white menu-link btn"><i class="fa-solid fa-right-to-bracket mr-5"></i>Logout</button>
                            </form>
                        </li>
                        @else
                        <li class="mx-1 menu-item"><a class="px-3 py-2 d-flex justify-content-center align-items-center text-decoration-none text-white menu-link" href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket mr-5"></i>Login</a></li>
                        <li class="mx-1 menu-item"><a class="px-3 py-2 d-flex justify-content-center align-items-center text-decoration-none text-white menu-link" href="{{route('register')}}"><i class="fa-solid fa-user-plus mr-5"></i>Sign Up</a></li>
                        @endif
                    </ul>
                </nav>
                <div class="nav-toggler d-none">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</header>