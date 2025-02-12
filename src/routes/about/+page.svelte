<script>
  const founder = {
    name: "Brashad Hasley",
    title: "Founder & CEO",
    company: "OGABAL Limited"
  };
</script>

<svelte:head>
  <title>About - OGABAL Limited</title>
</svelte:head>

<div class="content">
  <section class="about">
    <h1>About OGABAL</h1>
    
    <div class="founder-section">
      <div class="founder-card">
        <h2>{founder.name}</h2>
        <p class="founder-title">{founder.title}</p>
        <p class="founder-company">{founder.company}</p>
      </div>
      <div class="founder-bio">
        <p>
          As the founder of OGABAL Limited, Brashad Hasley brings extensive experience 
          in defense contracting and secure software development. His leadership 
          has been instrumental in establishing OGABAL as a trusted Service-Disabled 
          Veteran-Owned Small Business (SDVOSB) in the government contracting sector.
        </p>
      </div>
    </div>

    <div class="company-mission">
      <h2>Our Mission</h2>
      <p>
        OGABAL Limited is committed to providing innovative, secure, and reliable 
        solutions for government agencies. As a Service-Disabled Veteran-Owned Small 
        Business, we understand the unique challenges and requirements of government 
        operations.
      </p>
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

  .founder-section {
    display: grid;
    gap: 2rem;
    margin: 3rem 0;
  }

  .founder-card {
    background-color: var(--secondary);
    padding: 2rem;
    border-radius: 4px;
    border: 1px solid var(--border);
    text-align: center;
  }

  .founder-card h2 {
    color: var(--accent);
    margin: 0;
  }

  .founder-title {
    color: var(--text);
    font-size: 1.2rem;
    margin: 0.5rem 0;
    font-weight: bold;
  }

  .founder-company {
    color: var(--text-muted);
    margin: 0;
  }

  .founder-bio {
    font-size: 1.1rem;
    line-height: 1.6;
  }

  .company-mission {
    margin-top: 4rem;
  }

  .company-mission h2 {
    color: var(--accent);
    margin-bottom: 1rem;
  }

  @media (min-width: 768px) {
    .founder-section {
      grid-template-columns: 300px 1fr;
      align-items: start;
    }
  }
</style> 