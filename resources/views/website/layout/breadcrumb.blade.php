 <!-- Start Breadcrumb 
    ============================================= -->
          
  @if(isset($pageData->media) && $slug !== 'index')
     @foreach ($pageData->media as $media)
     @endforeach
     <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" 
     style="background-image: url( {{  'assets/img/2440x1578.png'}})">
        <div class="container">
          <div class="row">
           <div class="col-lg-8 offset-lg-2">
              <h1>{{ $pageData->title }}</h1>
              
              <ul class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a></li>
                <li class="active">{{ $pageData->title }}</li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
  @endif
    <!-- End Breadcrumb -->


     