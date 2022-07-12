{{-- <nav id="navbar" class="navbar navbar-expand-sm  ">
  <a class="navbar-brand" href="/">Laravel app</a>
  <div>
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/posts">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/services">Services</a>
      </li>
    </ul>
  </div>
  <div class ="nav-left">
  <ul class="navbar-nav">
    <li>
      <a class="nav-link" href="/posts/create"> Create_Post </a>
    </li>
  </ul>
  </div>
  
</nav> --}}



<nav id="navbar" class="navbar navbar-expand-sm">
  
  <a class="navbar-brand" href="/">
    <img src="{{asset('logo/logo.jpg')}}" width="40" height="40" alt="logo">
  </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/posts">Blog </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/about">About </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/services">Services</a>
      </li>
    </ul>
    
    <div class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">  
      <li class="nav-item active">
        <a class="nav-link" href="/posts/create">Create_Post</a>
      </li>
    </ul>
    <button type="button" class="btn btn-outline-light">Login</button>
    <button type="button" class="btn btn-outline-secondary">Register</button>
    </div>
    
  </div>
</nav>
