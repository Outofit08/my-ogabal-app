<script>
  const contactInfo = {
    name: "Brashad Hasley",
    phone: "+1 214-493-5717",
    website: "www.ogabal.com",
    email: "b.hasley@ogabal.com"
  };
</script>

<svelte:head>
  <title>Contact - OGABAL Limited</title>
</svelte:head>

<div class="content">
  <section class="contact">
    <h1>Contact Us</h1>
    
    <div class="contact-grid">
      <div class="contact-card">
        <h2>Get in Touch</h2>
        <div class="contact-info">
          <div class="info-item">
            <h3>Phone</h3>
            <p><a href="tel:+12144935717">{contactInfo.phone}</a></p>
          </div>
          
          <div class="info-item">
            <h3>Website</h3>
            <p><a href="https://www.ogabal.com" target="_blank">{contactInfo.website}</a></p>
          </div>
          
          <div class="info-item">
            <h3>Email</h3>
            <p><a href="mailto:b.hasley@ogabal.com">{contactInfo.email}</a></p>
          </div>
          
          <div class="info-item">
            <h3>Contact Person</h3>
            <p>{contactInfo.name}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<style>
  .content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
  }

  h1 {
    color: var(--accent);
    text-align: center;
    margin-bottom: 3rem;
  }

  .contact-grid {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 50vh;
  }

  .contact-card {
    background-color: var(--secondary);
    padding: 3rem;
    border-radius: 4px;
    border: 1px solid var(--border);
    width: 100%;
    max-width: 600px;
  }

  .contact-card h2 {
    color: var(--accent);
    text-align: center;
    margin-bottom: 2rem;
  }

  .contact-info {
    display: grid;
    gap: 2rem;
  }

  .info-item {
    text-align: center;
  }

  .info-item h3 {
    color: var(--text);
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
  }

  .info-item p {
    color: var(--accent);
    font-size: 1.2rem;
    margin: 0;
  }

  .info-item a {
    color: var(--accent);
    text-decoration: none;
    transition: color 0.2s;
  }

  .info-item a:hover {
    color: var(--text);
    text-decoration: none;
  }

  @media (min-width: 768px) {
    .contact-info {
      grid-template-columns: repeat(2, 1fr);
    }
  }
</style> 