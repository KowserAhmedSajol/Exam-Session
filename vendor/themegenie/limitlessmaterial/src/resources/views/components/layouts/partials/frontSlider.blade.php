 <!-- carousel -->


 <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        @if(count($sliders)>0)
			@foreach($sliders as $key=>$slider)
				@if($key == 0)
                <div class="carousel-item active" data-bs-interval="10000">
				@else
                <div class="carousel-item" data-bs-interval="10000">
				@endif

            
            <img src="{{ asset('uploads/images/sliders/'.$slider->src) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption animate__animated animate__backInUp animate__delay-.5s">
                    <h5>{{$slider->heading}}</h5>
                    <p>{{$slider->paragraph}}</p>
                    <a class="btn-slide" href="{{route('login')}}">Appoinment Now</a>
                </div>
            </div>
            @endforeach
        @else
				
            <div class="carousel-item active" data-bs-interval="10000">
				
                <div class="carousel-caption animate__animated animate__backInUp animate__delay-.5s">
                    <h5>Use Your Own Sliders</h5>
                    <p>Use your own contents</p>
                    <a class="btn-slide" href="{{route('login')}}">Appoinment Now</a>
                </div>
            </div>
            
        @endif    
        </div>
        @if(count($sliders)>1)
        <!--prev button-->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <!--next button-->
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        @endif
    </div>

    <!-- carousel end -->
