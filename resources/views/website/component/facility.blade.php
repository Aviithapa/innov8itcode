<div class="facilities-area default-padding">
    <div class="container">
      <div class="facilities-box">
        <div class="row">
          <div
            class="col-lg-6 thumb"
            style="background-image:  url({{ $facilities->getImageUrlAttribute() }})"
          ></div>
          <div class="col-lg-6 offset-lg-6 info">
            <div class="content-box">
              <div class="heading">
                <h5>{{ $facilities->excerpt }}</h5>
                <h2>{{ $facilities->title }}</h2>
              </div>
              <div class="facilities-items">
                @foreach ($facility as $data)
                <div class="item">
                  <div class="icon">
                    <img src="{{ $data->getImageUrlAttribute() }}" alt="Thumb" />
                    <i class="{{ $data->logo_image }}"></i>
                  </div>
                  <div class="info">
                    <h4>{{ $data->title }}</h4>
                    <p>
                      {{ $data->excerpt }}
                    </p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>