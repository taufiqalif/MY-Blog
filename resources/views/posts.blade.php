@extends('layouts.main')

@section('container')

<div class="container">
  <div class="row">
    <div class="col-sm-10">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col text-center">
            <span class="navbar-brand mb-0 h1 fs-1 blog-header-logo text-dark">{{ $title }}</span>
          </div>
        </div>
      </header>
    </div>
  </div>
</div>


@if ($posts->count())

<div class="row g-5">
  <div class="col">
    @foreach ($posts as $post)
    
      <div class="row">
        <div class="col">
          <div class="card m-3">
            <div class="row g-0">
              <div class="col-md-4 p-3">
                <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                  <p class="card-text"><small class="text-muted">By. <a href="/about">{{ $post->user->name }}</a> | Category <a href="/blog?category={{ $post->category->slug }}" class="link-secondary">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}</small></p>
                  <p class="card-text">{{ $post->excerpt }}<small><a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more</a></small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    @endforeach
  </div>
  <div class="col-md-3">
    <div class="position-sticky" style="top: 2rem;">
      <div class="col pb-lg-3 pt-lg-3">
        <form class="/posts">
          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          <div class="input-group">
            <input class="form-control mr-sm-5" type="text" placeholder="Search..." aria-label="Search" name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary  my-sm-0" type="submit">Search</button>
          </div>
        </form>
      </div>
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

      
@else
<div class="row justify-content-md-between">
  <div class="col">
    <p class="text-center fs-1">No post found.</p>
  </div>
</div>

@endif
<div class="d-flex justify-content-center m-5">
      {{ $posts->links() }}
</div>
@endsection