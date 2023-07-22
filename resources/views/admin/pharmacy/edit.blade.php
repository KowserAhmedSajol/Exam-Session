<x-sg-master>
   <!-- add new doctor -->

   <div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Add New Doctor</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('pharmacy_update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <label>Name:</label>
                <input type="hidden"name="id" value="{{$medicine->id}}" /><br>
                <x-sg-text name="name" value="{{$medicine->name}}" placeholder="Slider Name" /><br>
                {{-- This chunk of code is to show the error messege --}}
                @error('name')
                <div class="alert alert-warning alert-styled-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    {{ $message }}
                </div>
                @enderror
                {{-- This chunk of code is to show the error messege --}}
                <label>Price:</label>
                <x-sg-text value="{{$medicine->price}}" name="price" placeholder="Price" /><br>
                {{-- This chunk of code is to show the error messege --}}
                @error('price')
                <div class="alert alert-warning alert-styled-left alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    {{ $message }}
                </div>
                @enderror
                {{-- This chunk of code is to show the error messege --}}
                
                <!-- file uploader -->
                <div class="form-group">
                <label>Upload Image:</label>
                <input name="newimage" type="file" class="file-input" data-fouc>
                <input name="oldimage" value="{{$medicine->image}}" type="hidden" class="file-input" data-fouc>
                <img src="{{asset('uploads/images/pharmacy')}}/{{$medicine->image}}" style="width:100px;height:100px">
                </div>
            </fieldset>
            <div class="text-center mt-2">
                <button type="submit" class="btn btn-primary">Save<i class="icon-paperplane ml-2"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- add new doctor end -->
</x-sg-master>

