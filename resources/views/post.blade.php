@extends('layouts.main')

@section('container')

<div class="container">
  <div class="row">
    <div class="col-sm-10">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col text-center">
            <span class="navbar-brand mb-0 h1 fs-1 blog-header-logo text-dark">Singel Post</span>
          </div>
        </div>
      </header>
    </div>
  </div>
</div>

<div class="container">
  <div class="row g-5 pt-lg-3">
    <div class="col">
      <div class="card m-1">
        <img src="https://source.unsplash.com/500x200?{{ $post->category->name }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h1 class="card-title">{{ $post->title }}</h1>
          <p class="card-text"><small class="text-muted">By. <a href="#" class="">{{ $post->user->name }}</a> | Category <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-dark">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}</small></p>
          <p class="card-text">{!! $post->body !!}</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 pt-lg-3">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>
  
        {{-- <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div> --}}
  
        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->

{{-- <footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer> --}}

@endsection