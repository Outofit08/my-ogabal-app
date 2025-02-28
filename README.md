# OGABAL WordPress Theme

![OGABAL Theme](assets/theme-preview.png)

A professional dark-themed WordPress theme designed specifically for government contractors and service providers. This theme features a modern, sophisticated design with dynamic elements, glass morphism effects, and professional styling tailored for Service-Disabled Veteran-Owned Small Businesses (SDVOSB).

## Features

- **Professional Dark Theme** - Elegant dark color scheme with blue accents designed to present a professional image for government contractors
- **Modern Design Elements** - Glass morphism effects, gradient borders, sophisticated shadows, and subtle animations
- **Government Contractor Focus** - Special sections for highlighting certifications, competencies, and past performance
- **Responsive Layout** - Fully responsive design that works on all devices from mobile phones to large desktop displays
- **Performance Optimized** - Lightweight implementation with optimized assets and minimal external dependencies
- **Accessibility Compliant** - Designed with accessibility in mind to meet government standards
- **Built-in Dark Mode** - Consistent dark theme appearance across all devices and browsers
- **Custom Page Templates** - Special templates for Services, About, and Contact pages
- **Modern CSS Features** - Uses CSS variables, flexbox, grid layouts, and other modern techniques
- **Interactive Elements** - Hover effects, subtle animations, and visual feedback for enhanced user experience

## Installation

### Standard WordPress Installation

1. Download the theme zip file from the repository
2. Log in to your WordPress admin panel
3. Navigate to Appearance > Themes
4. Click "Add New" and then "Upload Theme"
5. Choose the downloaded zip file and click "Install Now"
6. After installation, click "Activate" to enable the theme

### Manual Installation

1. Download and extract the theme files
2. Via FTP, upload the entire `ogabal-theme` folder to your `/wp-content/themes/` directory
3. Log in to your WordPress admin panel
4. Navigate to Appearance > Themes
5. Find "OGABAL Theme" and click "Activate"

## Theme Structure

```
ogabal-theme/
├── assets/
│   ├── css/
│   │   ├── custom.css
│   │   └── circuit-pattern.svg
│   └── teamwork.gif
├── 404.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page-about.php
├── page-contact.php
├── page-services.php
├── page.php
├── single.php
└── style.css
```

## Customization

### Theme Colors

The theme uses CSS variables for easy color customization. To change the color scheme, edit the `:root` section in `style.css`:

```css
:root {
    --primary: #0f1219;
    --secondary: #1a202c;
    --accent: #4361ee;
    --accent-light: #4895ef;
    --accent-dark: #3a0ca3;
    --text: #f8f9fa;
    --text-muted: #ced4da;
    /* Additional variables */
}
```

### Home Page Layout

The home page layout is controlled by `front-page.php`. You can modify the hero section, feature cards, and other elements by editing this file.

### Page Templates

The theme includes custom templates for:
- **Services** (`page-services.php`)
- **About** (`page-about.php`)
- **Contact** (`page-contact.php`)

To use these templates, create a new page in WordPress and select the appropriate template from the "Page Attributes" section.

### Custom Fields

This theme is designed to work with Advanced Custom Fields (ACF) for enhanced content management. Recommended field groups include:

- Company Information (company_name, company_full_name, etc.)
- Contact Information (phone, email, address)
- Services (icon, title, description)
- Team Members (name, position, bio, photo)

## Recommended Plugins

For optimal functionality, we recommend the following plugins:

- **Advanced Custom Fields** - For enhanced content management
- **Yoast SEO** - For search engine optimization
- **Wordfence Security** - For enhanced website security
- **Contact Form 7** - For contact form functionality
- **Really Simple SSL** - For SSL/HTTPS implementation
- **WP Accessibility** - For accessibility compliance
- **WP Super Cache** - For improved performance

## Development

### Prerequisites

- WordPress 5.8+
- PHP 7.4+
- MySQL 5.6+ or MariaDB 10.1+

### Development Workflow

1. Clone the repository to your local development environment
2. Make changes to the theme files
3. Test changes in a local WordPress environment
4. Commit changes with descriptive commit messages
5. Push to your repository

### Deployment

For deployment to production, use the included `.cpanel.yml` file for automatic deployment via cPanel Git Version Control, or manually upload the theme files via FTP.

## Support and Maintenance

For support requests, bug reports, or feature suggestions, please contact us at:

- **Email**: support@ogabal.com
- **Website**: https://ogabal.com/support

## License

This theme is proprietary and licensed exclusively to OGABAL Limited. Unauthorized distribution, modification, or use is prohibited.

© 2023 OGABAL Limited. All rights reserved.
