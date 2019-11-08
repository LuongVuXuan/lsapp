<nav class="navbar navbar-expand navbar-dark bg-dark">
  <a class="navbar-brand" href="/"><?php echo e(config('app.name', 'LSAPP')); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      
  <div class="collapse navbar-collapse" id="navbarsExample02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/posts">Blog</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/posts/create">Create Post</a></li>
    </ul>
  </div>
</nav><?php /**PATH D:\xampp\htdocs\lsapp\resources\views/inc/navbar.blade.php ENDPATH**/ ?>