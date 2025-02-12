<script>
  const competencies = [
    {
      title: "Software Development",
      description: "Expertise in C++, Python, Java, and JavaScript for developing scalable, mission-critical applications.",
      icon: "💻"
    },
    {
      title: "Cloud and DevOps Technologies",
      description: "Proficient in AWS, Kubernetes, OpenShift, Docker, and YAML for cloud-native applications, containerization, and automation of CI/CD pipelines.",
      icon: "☁️"
    },
    {
      title: "AI & Data Engineering",
      description: "Integration of AI technologies into applications through APIs, data streaming frameworks, and third-party software integration.",
      icon: "🤖"
    },
    {
      title: "Geospatial & Intelligence Solutions",
      description: "Skilled in using GIS tools (ArcGIS, Palantir), enhancing intelligence operations and decision-making systems for government agencies.",
      icon: "🌍"
    },
    {
      title: "Agile Project Management",
      description: "Leading projects in Agile environments with Jira, Confluence, and other project management tools, ensuring timely and efficient delivery.",
      icon: "📊"
    }
  ];
</script>

<svelte:head>
  <title>Services - OGABAL Limited</title>
</svelte:head>

<div class="content">
  <section class="services">
    <h1>Core Competencies</h1>
    
    <div class="competencies-grid">
      {#each competencies as comp}
        <div class="competency-card">
          <div class="icon">{comp.icon}</div>
          <h2>{comp.title}</h2>
          <p>{comp.description}</p>
        </div>
      {/each}
    </div>

    <section class="differentiator">
      <h2>Our Differentiator</h2>
      <p class="lead">
        As a Service-Disabled Veteran-Owned Small Business, we combine deep technical expertise 
        with firsthand understanding of government operations. Our experience across leading 
        defense contractors enables us to deliver secure, scalable solutions that meet the 
        unique challenges of government agencies.
      </p>
    </section>
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

  .competencies-grid {
    display: grid;
    gap: 2rem;
    margin-bottom: 4rem;
  }

  .competency-card {
    background-color: var(--secondary);
    padding: 2rem;
    border-radius: 4px;
    border: 1px solid var(--border);
    transition: transform 0.2s;
  }

  .competency-card:hover {
    transform: translateY(-2px);
  }

  .icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
  }

  .competency-card h2 {
    color: var(--accent);
    margin: 0 0 1rem 0;
    font-size: 1.4rem;
  }

  .competency-card p {
    color: var(--text);
    margin: 0;
    line-height: 1.6;
  }

  .differentiator {
    background-color: var(--secondary);
    padding: 3rem;
    border-radius: 4px;
    border: 1px solid var(--border);
    margin-top: 4rem;
  }

  .differentiator h2 {
    color: var(--accent);
    text-align: center;
    margin-bottom: 1.5rem;
  }

  .lead {
    font-size: 1.2rem;
    line-height: 1.6;
    color: var(--text);
    margin: 0;
  }

  @media (min-width: 768px) {
    .competencies-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (min-width: 1024px) {
    .competencies-grid {
      grid-template-columns: repeat(3, 1fr);
    }
  }
</style> 