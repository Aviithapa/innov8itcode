 <!-- Start Breadcrumb 
    ============================================= -->
          
  @if(isset($pageData) && $slug !== 'index')
     <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
     style="background-image: url({{ getImage($pageData->image) }})">
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


     