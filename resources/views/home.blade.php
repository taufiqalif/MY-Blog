@extends('layouts.main')


@section('container')



<!-- Jumbotron -->
      <div class="p-4 p-md-5 mb-4 text-white rounded" style="background-image: url(img/taufiq_01.png)">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        </div>
      </div>

<!-- Akhir Jumbotron -->

<!-- Konten -->

<div class="row g-5">
  <div class="col-md-8">
    <article class="blog-post bg-light rounded p-4">
      <h2 class="blog-post-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
      <p class="blog-post-meta"><small class="text-muted">By. <a href="/about"> Taufiq Alif Rahman </a> | Category <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->category->name }}</a> | {{ $posts[0]->created_at->diffForHumans() }}</small></p>
      <p class="card-text">{{ $posts[0]->excerpt }}<small><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">Read more</a></small></p>
    </article>
    <hr>
    <article class="blog-post bg-light rounded p-4">
      <h2 class="blog-post-title"><a href="/posts/{{ $posts[1]->slug }}" class="text-decoration-none text-dark">{{ $posts[1]->title }}</a></h2>
      <p class="blog-post-meta"><small class="text-muted">By. <a href="/about"> Taufiq Alif Rahman </a> | Category <a href="/blog?category={{ $posts[1]->category->slug }}" class="text-decoration-none text-dark">{{ $posts[1]->category->name }}</a> | {{ $posts[1]->created_at->diffForHumans() }}</small></p>
      <p class="card-text">{{ $posts[1]->excerpt }}<small><a href="/posts/{{ $posts[1]->slug }}" class="text-decoration-none">Read more</a></small></p>
    </article>
    <hr>
    <article class="blog-post bg-light rounded p-4">
      <h2 class="blog-post-title"><a href="/posts/{{ $posts[2]->slug }}" class="text-decoration-none text-dark">{{ $posts[2]->title }}</a></h2>
      <p class="blog-post-meta"><small class="text-muted">By. <a href="/about"> Taufiq Alif Rahman </a> | Category <a href="/blog?category={{ $posts[2]->category->slug }}" class="text-decoration-none text-dark">{{ $posts[2]->category->name }}</a> | {{ $posts[2]->created_at->diffForHumans() }}</small></p>
      <p class="card-text">{{ $posts[2]->excerpt }}<small><a href="/posts/{{ $posts[2]->slug }}" class="text-decoration-none">Read more</a></small></p>
    </article>
    <hr>
    <article class="blog-post bg-light rounded p-4">
      <h2 class="blog-post-title"><a href="/posts/{{ $posts[3]->slug }}" class="text-decoration-none text-dark">{{ $posts[3]->title }}</a></h2>
      <p class="blog-post-meta"><small class="text-muted">By. <a href="/about"> Taufiq Alif Rahman </a> | Category <a href="/blog?category={{ $posts[3]->category->slug }}" class="text-decoration-none text-dark">{{ $posts[3]->category->name }}</a> | {{ $posts[3]->created_at->diffForHumans() }}</small></p>
      <p class="card-text">{{ $posts[3]->excerpt }}<small><a href="/posts/{{ $posts[3]->slug }}" class="text-decoration-none">Read more</a></small></p>
    </article>
    <hr>
    <article class="blog-post bg-light rounded p-4">
      <h2 class="blog-post-title"><a href="/posts/{{ $posts[4]->slug }}" class="text-decoration-none text-dark">{{ $posts[4]->title }}</a></h2>
      <p class="blog-post-meta"><small class="text-muted">By. <a href="/about"> Taufiq Alif Rahman </a> | Category <a href="/blog?category={{ $posts[4]->category->slug }}" class="text-decoration-none text-dark">{{ $posts[4]->category->name }}</a> | {{ $posts[4]->created_at->diffForHumans() }}</small></p>
      <p class="card-text">{{ $posts[4]->excerpt }}<small><a href="/posts/{{ $posts[4]->slug }}" class="text-decoration-none">Read more</a></small></p>
    </article>
  </div>
  <div class="col-md-4">
    <div class="position-sticky" style="top: 2rem;">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="fst-italic">About</h4>
        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
      </div>
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
<!-- Akhir Konten -->

@endsection

