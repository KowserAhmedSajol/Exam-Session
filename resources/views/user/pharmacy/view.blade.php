<x-sg-usermaster>
    <!-- User details (with sample pattern) -->
    
    <div class="card">
            <div class="card-body bg-blue text-center card-img-top"
                style="background-image: url(../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                <div class="card-img-actions d-inline-block mb-3">
                    <img class="img-fluid rounded-circle" src="{{asset('uploads/images/pharmacy/'.$medicine->image)}}"
                        width="170" height="170" alt="">
                </div>
    
                <h6 class="font-weight-semibold mb-0">{{$medicine->name}}</h6>
                <span class="d-block opacity-75">{{$medicine->price}}</span>
    
                
            </div>
    
            <div class="card-body border-top-0">
                <div class="d-sm-flex flex-sm-wrap mb-3">
                    <div class="font-weight-semibold">Full name:</div>
                    <div class="ml-sm-auto mt-2 mt-sm-0">{{$medicine->name}}</div>
                </div>
    
                <div class="d-sm-flex flex-sm-wrap mb-3">
                    <div class="font-weight-semibold">Price:</div>
                    <div class="ml-sm-auto mt-2 mt-sm-0">{{$medicine->price}}</div>
                </div>
    
    
                <div class="d-sm-flex flex-sm-wrap mb-3">
                    <div class="font-weight-semibold">Your Name:</div>
                    <div class="ml-sm-auto mt-2 mt-sm-0">{{auth()->user()->name}}</div>
                </div>
                
                <div class="d-sm-flex flex-sm-wrap mb-3">
                    <div class="font-weight-semibold">Your Id:</div>
                    <div class="ml-sm-auto mt-2 mt-sm-0">{{auth()->user()->id}}</div>
                </div>
                <form action="{{route('user_pharmacy_buy')}}" method="post">
                    @csrf
                <div class="d-sm-flex flex-sm-wrap mb-3">
                    <div class="font-weight-semibold">Shipping Address:</div>
                    <x-sg-text value="{{ old('price') }}" name="address" placeholder="address" /><br>
                </div>
                <div class="d-sm-flex flex-sm-wrap mb-3">
                    <div class="font-weight-semibold">Phone Number:</div>
                    <x-sg-text value="{{ old('price') }}" name="phone" placeholder="Phone" /><br>
                </div>
                        <input type="hidden" name="id" value="{{$medicine->id}}">
                        <input type="hidden" name="name" value="{{auth()->user()->name}}">
                        <input type="hidden" name="userid" value="{{auth()->user()->id}}">
                        <input type="submit"  class="btn bg-teal btn-ladda btn-ladda-progress float-right mt-3" data-style="expand-left" data-spinner-size="20" name="submit" value="Buy this Product">
                </form>
    
            </div>
        </div>
    
            
                            <!-- /user details (with sample pattern) -->
    </x-sg-usermaster>