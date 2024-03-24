<nav class="main-nav">
  <img src="images/favicon.svg" alt="test">
  <a href="/" class="<?= t_url('/') || t_url('/') ? 'active' : '' ?>">Home</a>
  <a href="/about" class="<?= t_url('/about') ? 'active' : '' ?>">About</a>
  <a href="/contact" class="<?= t_url('/contact') ? 'active' : '' ?>">Contact</a>
</nav>