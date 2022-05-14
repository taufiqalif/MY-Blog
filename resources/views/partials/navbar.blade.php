

    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-3 pt-1">
        <a class="btn btn-sm btn-outline-secondary px-2 {{ ($active === 'home') ? 'active' : '' }}" href="/">Home</a>
        <a class="btn btn-sm btn-outline-secondary px-2 {{ ($active === 'about') ? 'active' : '' }}" href="/about">About</a>
        <a class="btn btn-sm btn-outline-secondary px-2 {{ ($active === 'posts') ? 'active' : '' }}" href="/blog">Blog</a>
      </div>
      <div class="col-5 text-center">
        <a class="blog-header-logo text-dark" href="/">Blog Saya</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        @foreach ($categories as $category)
        <a class="p-2 link-secondary" href="/blog?category={{ $category->slug }}">{{ $category->name }}</a>
        @endforeach
      </nav>
    </div>
</div>
