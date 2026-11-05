# ARTEVO – Custom WordPress Theme

A custom-developed WordPress theme for **ARTEVO**, an art consultancy website. Built with PHP, WordPress, HTML, CSS and JavaScript, with a focus on responsive design, reusable templates and dynamic content management.

🌐 **Live Website:** https://artevo-consulting.com/

## Project Overview

ARTEVO is a custom WordPress theme developed to provide a tailored website experience with dynamic content management and custom WordPress functionality.

Instead of relying entirely on pre-built themes or page builders, this project uses custom PHP templates and WordPress functionality to manage website content, navigation, blog posts, projects and reusable theme components.

## Key Features

- Custom WordPress theme development
- Responsive front-end implementation
- Dynamic header and navigation menus
- WordPress Customizer integration
- Dynamic footer settings and social media links
- Custom blog listing and single-post templates
- Dynamic archive templates
- Custom Project post type
- Project archive and single-project templates
- Custom taxonomy integration
- Advanced Custom Fields (ACF) integration
- Dynamic featured images, post content and metadata
- Contact Form 7 integration
- Reusable PHP template parts
- WordPress Loop and native template functionality

## Dynamic WordPress Functionality

The theme uses WordPress core functionality to manage website content dynamically.

| Component | Implementation |
|---|---|
| Header | Custom Logo and WordPress navigation |
| Footer | Customizer settings and registered menus |
| Blog | WordPress posts and Loop |
| Blog Archive | Dynamic archive templates |
| Single Blog | Dynamic post content and metadata |
| Projects | Custom Post Type |
| Project Archive | Dynamic project listing |
| Single Project | ACF-powered project information |
| Navigation | Registered WordPress menu locations |
| Social Links | WordPress Customizer settings |

## Technologies Used

- **CMS:** WordPress
- **Backend:** PHP
- **Frontend:** HTML5, CSS3, JavaScript
- **Content Management:** WordPress Custom Post Types and Taxonomies
- **Custom Fields:** Advanced Custom Fields (ACF)
- **Forms:** Contact Form 7

## Theme Structure

The theme follows a WordPress template-based architecture.

```text
ARTEVO/
│
├── assets/
│   ├── css/
│   ├── js/
│   ├── images/
│   └── fonts/
│
├── template-parts/
│   ├── content.php
│   ├── index-content.php
│   └── project-content.php
│
├── functions.php
├── header.php
├── footer.php
├── index.php
├── archive.php
├── single.php
├── single-project.php
├── archive-project.php
├── page.php
├── 404.php
└── style.css
```

*This is a simplified overview of the theme structure.*

## Installation

1. Download or clone this repository.
2. Upload the theme folder to:

   `wp-content/themes/`

3. Activate the theme from **WordPress Dashboard → Appearance → Themes**.
4. Install and activate the required plugins:
   - Advanced Custom Fields
   - Contact Form 7
5. Configure the WordPress menus and Customizer settings.
6. Configure the ACF fields required by the single-project template.

**Note:** ACF field-group definitions are not included in this repository. They must be configured separately for the project detail fields to work as intended.

## Development Highlights

This project demonstrates practical WordPress development skills, including:

- Building custom themes using PHP.
- Working with WordPress template hierarchy.
- Creating dynamic content using WordPress loops.
- Registering custom post types and taxonomies.
- Integrating custom fields into theme templates.
- Developing reusable theme components.
- Managing website settings through the WordPress Customizer.
- Connecting front-end components with WordPress backend functionality.

## Project Information

| Detail | Description |
|---|---|
| Project | ARTEVO |
| Project Type | Custom WordPress Website |
| Development | Custom Theme Development |
| CMS | WordPress |
| Role | WordPress Developer |
| Website | https://artevo-consulting.com/ |

## Author

**Syed Kashif Jafari**

Web Developer & WordPress Developer

- **Portfolio:** https://kashifjafari.github.io/
- **LinkedIn:** https://www.linkedin.com/in/syedkashifjafari/

---

*This repository showcases custom WordPress theme development and implementation work for the ARTEVO website.*