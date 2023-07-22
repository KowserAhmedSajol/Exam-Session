<!-- Blog & News -->
 

<section class="service full-height" id="news">
        <div class="container">
            <h2 class="text-center pb-5">Blog & News</h2>
            <div class="row pb-3">

            @foreach($news as $anews)
            
                <div class="col-lg-4 mb-3">
                    <div class="card-news rounded-4 shadow-effect">

                        <img class="card-img-top rounded-4" src="{{ asset('uploads/images/news/'.$anews->src) }}" style="height: 30vh;" alt="">

                        <div class="card-body p-3">
                            <div class="src">
                                
                            </div>
                            <h4 class="pb-2">{{$anews->heading}}</h4>
                            <h6 class="text-muted">Posted on: {{$anews->post_time}}</h6>

                            
                            @if(str_word_count($anews->paragraph) > 15)
                            <p class="fs-6">{{ implode(' ', array_slice(explode(' ', $anews->paragraph), 0, 15)) }}...</p>
                            
                            <a class="btn btn-danger btn-md mt-3" data-bs-toggle="modal" data-bs-target="#{{$anews->uuid}}" id="submitButton" type="submit">Read More</a> 
                            <div class="modal fade" id="{{$anews->uuid}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{$anews->heading}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                  <img class="card-img-top rounded-4" src="{{ asset('uploads/images/news/'.$anews->src) }}" style="height: 30vh;" alt="">                            
                                  <h4 class="pb-2 mt-4">{{$anews->heading}}</h4>
                                  <h6 class="text-muted">Posted on: {{$anews->post_time}}</h6>
                                  <p class="fs-6">{{$anews->paragraph}}</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>       
                            
                            @else
                            <p class="fs-6">{{$anews->paragraph}}</p>          

                            @endif

                        </div>
                    </div>
                </div>

               @endforeach 
               
            

             

             

            </div>
        </div>
    </section>




    <!-- Blog & News end -->