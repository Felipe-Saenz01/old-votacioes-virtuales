<x-layout>
    <div class="container-fluid text-center vh-100 d-flex justify-content-center align-items-center" style="background-image: linear-gradient(to left,#b3b0ab, #00cc0ac2);">
        <div class="row ">
            <div class="col-6 offset-md">
                <article>
                    <form method="POST" action="/admin/user">
                        @csrf
                        <div class="card border border-white border-3 " id="LoginCard" style="width: 21rem;">
                            <div class="card-body pt-30">
                                <h5 class="card-title text-dark">Login</h5>
                                <!------"Formulario"-------------------------------->
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="bi bi-person-circle"></i>
                                        </span>
                                    </div>
                                    <input type="text"name="name" class="form-control input_user" value="{{old('name')}}" placeholder="username" >
                                </div>
                                @error('name')
                                    <p class="text-danger">{{$message}}</p>                                        
                                @enderror
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="bi bi-person-circle"></i>
                                        </span>
                                    </div>
                                    <input type="email" name="email" class="form-control input_pass" value="{{old('email')}}" placeholder="Email" >
                                </div>
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>                                        
                                @enderror
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="bi bi-key-fill"></i>
                                        </span>
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <input type="password" name="password" class="form-control input_pass" value="" placeholder="password" >
                                </div>
                                @error('password')
                                    <p class="text-danger">{{$message}}</p>                                        
                                @enderror
                                
    
                                <div class="card-footer p-2">
                                    <div class="">
                                        <input type="submit" name="button" value="Registrar" class="btn btn-success" id="loginbtn" >
                                        <a type="button" href="/admin" class="btn btn-success"  id="loginbtn" >Atras</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </article>
                
            </div>
        </div>
    </div>

</x-layout>