@extends('layout.login-master')
@section('title', 'Admin-q9p')
@section('maincontent')   
            
            <main class="container">
            <div class="form bg-white shadow-sm p-md-5 border text-center" style="border-radius: 25px;"> 
                <form action="{{ route('login.post')}}" method="post">
            
                @csrf
                    <h1 class="h2 fw-bold">Sign In Here</h1>
                    <h5 class="h5 mb-3 fs-5 text-muted">Hi, please sign in to see our recomendation healthy food.</h5>
                    <i class="bi bi-person-circle"></i>

                    <div class="form-floating mb-3">
                    <input type="username" name="username" class="form-control @error('username') id-invalid @enderror" id="username" placeholder="Username" autofocus required>
                    <label for="floatingInput">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    </div>

                    
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                
                </form>
            </div>
        </main>
@stop