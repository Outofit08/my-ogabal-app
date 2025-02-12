<script>
  const fullName = "Official Government Assistance for Businesses and APPlication logistics";
  const certifications = ["Service-Disabled Veteran-Owned Small Business (SDVOSB)"];
  const founder = {
    name: "Brashad Hasley",
    title: "Founder & CEO",
    company: "OGABAL Limited"
  };
  
  const experiences = [
    {
      company: "CACI Inc.",
      role: "Senior Software Engineer",
      description: "R&D and prototype development for government clients, building micro-services and enhancing customer systems."
    },
    {
      company: "Lockheed Martin",
      role: "DevOps Lead",
      description: "Led DevOps automation, feature development, and containerization in high-security environments, ensuring mission success in critical defense projects."
    },
    {
      company: "Raytheon Company",
      role: "Software Engineer",
      description: "Delivered application enhancements and Agile software development for large-scale, secure applications running on Kubernetes and Docker."
    },
    {
      company: "Occam Solutions",
      role: "Software Developer",
      description: "Developed complex data streaming frameworks and mission-critical software, operating across secure environments for the Department of Defense (DoD)."
    },
    {
      company: "SOCOM Units",
      role: "Technical Lead",
      description: "Worked with small, agile teams within SOCAFRICA and SOCEUR, contributing to the mission success of these specialized units through high-performance and secure solutions."
    }
  ];
</script>

<svelte:head>
  <title>OGABAL Limited - Government Contract Solutions</title>
</svelte:head>

<div class="hero">
  <h1>OGABAL Limited</h1>
  <p class="acronym">{fullName}</p>
  <div class="certification">
    <span class="badge">SDVOSB</span>
  </div>
</div>

<div class="content">
  <section class="about">
    <h2>About Us</h2>
    <div class="founder-info">
      <div class="founder-card">
        <h3>{founder.name}</h3>
        <p class="founder-title">{founder.title}</p>
        <p class="founder-company">{founder.company}</p>
      </div>
    </div>
    <p class="lead">
      As a Service-Disabled Veteran-Owned Small Business (SDVOSB), OGABAL exemplifies innovation and reliability. 
      Our team's deep experience across leading defense contractors highlights our proven ability to navigate 
      the most complex and secure environments.
    </p>
  </section>

  <section class="services">
    <h2>Core Capabilities</h2>
    <div class="service-grid">
      <div class="service-card">
        <h3>Cloud-Native Development</h3>
        <p>Secure, scalable cloud solutions for government agencies</p>
      </div>
      <div class="service-card">
        <h3>Geospatial Intelligence</h3>
        <p>Advanced geospatial solutions and analytics</p>
      </div>
      <div class="service-card">
        <h3>System Modernization</h3>
        <p>Legacy system modernization and integration</p>
      </div>
      <div class="service-card">
        <h3>CI/CD Implementation</h3>
        <p>Automated pipeline development and optimization</p>
      </div>
    </div>
  </section>

  <section class="experience">
    <h2>Past Performance</h2>
    <div class="experience-grid">
      {#each experiences as exp}
        <div class="experience-card">
          <h3>{exp.company}</h3>
          <h4>{exp.role}</h4>
          <p>{exp.description}</p>
        </div>
      {/each}
    </div>
  </section>
</div>

<style>
  .hero {
    background-color: var(--secondary);
    padding: 4rem 2rem;
    text-align: center;
    border-bottom: 1px solid var(--border);
  }

  h1 {
    font-size: 3rem;
    margin: 0;
    color: var(--accent);
  }

  .acronym {
    color: var(--text-muted);
    font-size: 1.2rem;
    margin-top: 1rem;
  }

  .content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
  }

  .service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
  }

  .service-card {
    background-color: var(--secondary);
    padding: 2rem;
    border-radius: 4px;
    border: 1px solid var(--border);
  }

  .service-card h3 {
    color: var(--accent);
    margin-top: 0;
  }

  h2 {
    text-align: center;
    color: var(--text);
    margin-bottom: 2rem;
  }

  .certification {
    margin-top: 1rem;
  }

  .badge {
    background-color: var(--accent);
    color: var(--primary);
    padding: 0.5rem 1rem;
    border-radius: 4px;
    font-weight: bold;
  }

  .about {
    margin: 3rem 0;
  }

  .lead {
    font-size: 1.2rem;
    line-height: 1.6;
    margin: 1.5rem 0;
  }

  .experience-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
    margin-top: 2rem;
  }

  .experience-card {
    background-color: var(--secondary);
    padding: 1.5rem;
    border-radius: 4px;
    border: 1px solid var(--border);
    transition: transform 0.2s;
  }

  .experience-card:hover {
    transform: translateY(-2px);
  }

  .experience-card h3 {
    color: var(--accent);
    margin: 0;
    font-size: 1.4rem;
  }

  .experience-card h4 {
    color: var(--text);
    margin: 0.5rem 0;
    font-size: 1.1rem;
  }

  .experience-card p {
    color: var(--text-muted);
    margin: 0.5rem 0 0 0;
    line-height: 1.4;
  }

  @media (min-width: 768px) {
    .experience-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  .founder-info {
    margin: 2rem 0;
    text-align: center;
  }

  .founder-card {
    display: inline-block;
    background-color: var(--secondary);
    padding: 2rem;
    border-radius: 4px;
    border: 1px solid var(--border);
    margin-bottom: 2rem;
  }

  .founder-card h3 {
    color: var(--accent);
    font-size: 1.8rem;
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
</style>
