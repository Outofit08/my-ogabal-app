<script>
  import '../lib/styles/global.css';
</script>

<nav>
  <div class="nav-content">
    <div class="logo">
      <a href="/">OGABAL LTD</a>
    </div>
    <div class="nav-links">
      <a href="/">Home</a>
      <a href="/services">Services</a>
      <a href="/contracts">Contracts</a>
      <a href="/about">About</a>
      <a href="/contact">Contact</a>
    </div>
  </div>
</nav>

<main>
  <slot />
</main>

<footer>
  <p>© {new Date().getFullYear()} OGABAL Limited - Official Government Assistance for Businesses and APPlication logistics</p>
  <p class="footer-links">
    <a href="/privacy">Privacy Policy</a> |
    <a href="/terms">Terms of Service</a> |
    <a href="/contact">Contact</a>
  </p>
</footer>

<style>
  .nav-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .logo a {
    font-size: 1.5rem;
    font-weight: bold;
    color: var(--accent);
  }

  .nav-links {
    display: flex;
    gap: 2rem;
  }

  .nav-links a {
    color: var(--text);
    text-decoration: none;
  }

  .nav-links a:hover {
    color: var(--accent);
  }

  .footer-links {
    margin-top: 1rem;
    color: var(--text-muted);
  }

  .footer-links a {
    color: var(--text-muted);
    margin: 0 0.5rem;
  }
</style> 