<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            @if (session()->has('msg'))
                            <div class="alert alert-success">
                                {{ session()->get('msg') }}
                            </div>
                            @endif
                            <div class="card-body">
                                <h1 class="is-size-3">Login</h1>
                                <p class="text-medium-emphasis">Welcome Back!
                                    Sign In to your account</p>
                                <form action="{{route('loginstore')}}" method="post">
                                    @csrf
                                    @method("POST")
                                    <div class="input-group mb-3"><span class="input-group-text">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-user')}}">
                                                </use>
                                            </svg></span>
                                        <input class="form-control" type="text" name="email" placeholder="Email">
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <div class="input-group mb-4">
                                        <span class="input-group-text">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-lock-locked')}}">
                                                </use>
                                            </svg>
                                        </span>
                                        <input class="form-control" name="password" type="password"
                                            placeholder="Password">
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="submit" value="Login" class="btn btn-primary px-4">
                                        </div>
                                        <div class="col-6 text-end">
                                            <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card col-md-5 text-white bg-primary py-5">
                            <div class="card-body text-center">
                                <div>
                                    <h2 class="is-size-3 mb-2">Dairy Farm Management System</h2>
                                    <p>A fully responsive system with many features available.</p>
                                    <p>Not yet registered?</p>
                                    <a href="{{ route('register')}}" class="btn btn-lg btn-outline-light mt-3">
                                        Register
                                        Now!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('UI/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
    <script src="{{asset('UI/vendors/simplebar/js/simplebar.min.js')}}"></script>
    <script>
    </script>

</body>

</html>