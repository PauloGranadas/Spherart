<x-layoutIndex>
    <div class="bg-image" 
        style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
                height: 100vh">
    </div>

    <div class="grid">        
        <div class="g-col-4">
            <img
               src="{{$user->avatar ? asset('storage/' . $user->avatar) : asset('images/no-image.png')}}"
                class="img-fluid hover-shadow"
                alt="Los Angeles Skyscrapers"
                />
        </div>
        <div class="g-col-8">
            <p class="fs-4">.fs-4 text</p>
            <p class="lh-1">
                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio
                dui.
            </p>
        </div>
      </div>
</x-layoutIndex>