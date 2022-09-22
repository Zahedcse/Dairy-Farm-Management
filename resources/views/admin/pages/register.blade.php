<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4 mx-4">
                        <div class="card-body p-4 shadow">
                            <h1 class="is-size-3 has-text-centered">Register</h1>
                            <p class="text-medium-emphasis">Create your account</p>
                            <form action="{{route('regstore')}}" method="post">
                                @csrf
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-user')}}">
                                            </use>

                                        </svg>
                                    </span>
                                    <input class="form-control" type="text" name="username" placeholder="Username">
                                </div>
                                @error('username')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-user')}}">
                                            </use>
                                        </svg>
                                    </span>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Name">
                                </div>
                                @error('name')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-envelope-open')}}">
                                            </use>
                                        </svg>
                                    </span>
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                                @error('email')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-lock-locked')}}">
                                            </use>
                                        </svg>

                                    </span>
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                @error('password')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{asset('UI/vendors/@coreui/icons/svg/free.svg#cil-lock-locked')}}">
                                            </use>
                                        </svg>
                                    </span>
                                    <input class="form-control" type="password" name="password_confirmation"
                                        placeholder="Repeat password">
                                </div>
                                @error('password_confirmation')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                                <input type="submit" value="Register" class="btn btn-block btn-success btn-sm">

                            </form>
                            <p class="mt-3">Already registered?
                                <span>
                                    <a href="{{ route('login')}}" class="btn btn-block btn-primary btn-sm">
                                        Login!
                                    </a>
                                </span>
                            </p>
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