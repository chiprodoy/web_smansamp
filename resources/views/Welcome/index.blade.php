@extends('layouts.sailore.index')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        @foreach ($headlineContent as $item)
         <!-- Slide 1 -->
         @if ($loop->first)
             {{-- This is the first iteration --}}
            <div class="carousel-item active" style="background-image: url('{{$item->cover}}')">
         @else
            <div class="carousel-item " style="background-image: url('{{$item->cover}}')">

         @endif
                <div class="carousel-container">
                <div class="container">
                    <h2 class="animate__animated animate__fadeInDown"><span>{{ $item->title }}</span></h2>
                    <p class="animate__animated animate__fadeInUp">{!! $item->description !!}</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
                </div>
            </div>
            {{-- end slide item --}}

        @endforeach

      </div>
      {{-- End carousel inner --}}

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-12 pt-4 pt-lg-0">
            <h3><a href='{{ route('public.post.show',$sambutan->slug)}}'>{{$sambutan->title}}</a></h3>
            <p>
              {{ $sambutan->description }}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <h3 style="text-align: center">Fasilitas</h3>
        <div class="row">
            @foreach ($contentFasilitas as $item)
                <div class="col-md-6">
                    <div class="icon-box">
                    <i class="{{ $item->icon }}"></i>
                    <h4><a href="{{ route('public.post.show',$item->slug)}}">{{ $item->title}}</a></h4>
                    <p>{{ $item->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Berita</li>
              <li data-filter=".filter-card">Pengumuman</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

            <div class=" portfolio-item filter-app row">
                @foreach ($contentBerita as $item)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4><a href="{{route('public.post.show',$item->slug)}}">{{$item->title}}</a></h4>
                            <div class="post-meta mb-3">
                                <i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a>
                                <i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a>
                            </div>
                            <img src=""/>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class=" portfolio-item filter-card row">
                @foreach ($contentPengumuman as $item)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4><a href="{{route('public.post.show',$item->slug)}}">{{$item->title}}</a></h4>
                            <div class="post-meta mb-3">
                                <i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a>
                                <i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a>
                            </div>
                            <img src=""/>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

@endsection
