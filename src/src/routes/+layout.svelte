<script>
  import '../lib/styles/global.css';
</script>

<nav>
  <a href="/">Home</a>
  <!-- Add more navigation items -->
</nav>

<main>
  <slot />
</main>

<footer>
  <p>© {new Date().getFullYear()} ogabal.com</p>
</footer>

<style>
  main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
  }
</style> 