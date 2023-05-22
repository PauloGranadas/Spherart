<x-layoutIndex>

    <div class="container">
        <header>
            <h2 class="text-2xl font-bold uppercase mb-1 mt-5"> User Registration

            </h2>
            <p class="mb-4">Create an account to participate and create projects</p>
        </header>

        </header>
    </div>
    <div class="container">
        <form method="POST" action="/users" enctype="multipart/form-data">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" name="firstname" value="{{$user->firstname}}" />
                        <label class="form-label" for="form3Example1">First name</label>
                        @error('firstname')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" name="lastname" value="{{$user->lastname}}" />
                        <label class="form-label" for="form3Example2">Last name</label>
                        @error('lastname')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example3" class="form-control" name="nikname" value="{{$user->nickname}}" />
                        <label class="form-label" for="form3Example3">Nickname</label>
                        @error('nikname')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example4" class="form-control" name="country" value="{{$user->country}}" />
                        <label class="form-label" for="form3Example4">Country</label>
                        @error('country')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example5" class="form-control" name="email" value="{{$user->email}}" />
                        <label class="form-label" for="form3Example5">Email address</label>
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col">
                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control" name="locality" value="{{$user->locality}}" />
                        <label class="form-label" for="form3Example8">Locality</label>  
                        @error('locality')
                        <span class="text-danger mt-0">{{$message}}</span>
                        @enderror                     
                    </div>
                    
                </div>
            </div>

            <!-- Password input -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example6" class="form-control" name="password" value="{{$user->password}}" />
                        <label class="form-label" for="form3Example6">Password</label>
                    </div>
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example7" class="form-control" name="password_confirmation" value="" />
                        <label class="form-label" for="form3Example7">Confirm Password</label>
                    </div>
                    @error('password_confirmation')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            {{-- Importe File Feature  --}}
            <div class="mb-4">
                <label for="avatar" class="inline-block text-lg mb-2">
                    Image Profile
                </label>
                <br>
                <input type="file" {{--  --}} class="btn btn-primary" name="avatar" />
                @error('avatar')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-outline">
                <textarea class="form-control" id="textAreaExample" rows="4" name="bio">{{$user->bio}}</textarea>
                <label class="form-label" for="textAreaExample">Bio (50 characters min.)</label>                
                @error('bio')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            
            

            {{-- Categories --}}
            @include('partials._categories')

            {{-- Google Recaptcha --}}
            {{-- @captcha --}}


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Sign up</button>


        </form>
    </div>
</x-layoutIndex>