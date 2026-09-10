# Tokyo Animania – Responsive Product Landing Page

A responsive product landing page created for **Tokyo Animania**, a small business offering anime figures and Japanese collectibles. This project was developed as a **Week 5 Laboratory Activity** using Laravel, Tailwind CSS, and reusable Laravel Blade Components.

## About the Project

Tokyo Animania's landing page provides customers with a responsive and user-friendly way to explore featured anime figures and collectibles, learn about the shop, read customer feedback, and contact the seller for product prices and availability.

Since product prices and availability may vary, customers are directed to contact Tokyo Animania through Messenger instead of purchasing directly through the website.

## Technologies Used

- Laravel
- PHP
- Laravel Blade
- Blade Components
- Tailwind CSS
- HTML5
- Vite
- Git
- GitHub

## Features

- Responsive navigation bar and mobile menu
- Hero section with call-to-action buttons
- Shop features and benefits
- Featured product cards and product showcase
- Collector options
- Customer testimonials
- Call-to-action and contact section
- Responsive footer
- Demo sign-in interface
- Desktop, tablet, and mobile layouts
- SEO metadata
- Accessibility improvements
- Keyboard-friendly navigation and visible focus states
- Responsive typography, spacing, buttons, and product grids

## Laravel Blade Components

The website uses reusable Laravel Blade Components to keep the interface organized, reusable, and maintainable.

```text
resources/views/components/
├── navbar.blade.php
├── hero.blade.php
├── feature-card.blade.php
├── features.blade.php
├── product-card.blade.php
├── products.blade.php
├── showcase.blade.php
├── pricing-card.blade.php
├── pricing.blade.php
├── testimonial-card.blade.php
├── testimonials.blade.php
├── cta.blade.php
├── button.blade.php
└── footer.blade.php
```

## Responsive Design

The landing page was designed and tested for multiple screen sizes using responsive Tailwind CSS breakpoints.

The following viewport sizes were used during responsive testing:

- **Desktop:** 1440 × 900
- **Tablet:** 768 × 1024
- **Mobile:** 390 × 844

Desktop layouts display full navigation and multi-column content. Tablet layouts adjust grids and spacing for medium-sized screens, while mobile layouts use stacked content, mobile navigation, responsive typography, and appropriately sized buttons and images.

## Accessibility

Accessibility improvements were added to make the website easier to navigate and understand.

These improvements include:

- Descriptive image alternative text
- ARIA labels for important navigation elements
- Accessible navigation structure
- Visible keyboard focus states
- Clear button and link labels
- Keyboard-accessible navigation controls

## SEO

Basic search engine optimization was implemented in the main Laravel layout.

SEO improvements include:

- Page title metadata
- Meta description
- Relevant keywords
- Author metadata
- Search engine robots directive
- Canonical URL
- Open Graph metadata
- Social media preview metadata
- Browser theme color

## Screenshots

Project screenshots are stored in the `screenshots` directory.

The documentation includes screenshots of:

- Navbar
- Hero section
- Features section
- Product sections
- Collector options
- Testimonials
- Call-to-action section
- Footer
- Demo Sign-In page
- Blade Components
- Desktop responsive view
- Tablet responsive view
- Mobile responsive view

## Demo Sign-In

The project includes a demonstration Sign-In page for interface and navigation purposes.

The Sign-In page does **not** implement real user authentication or store user credentials in a database. It is included to demonstrate navigation and interface design. A complete authentication system may be implemented as a future enhancement.

## Installation

Clone the repository:

```bash
git clone https://github.com/rosaleshane/week05-product-landing-page.git
cd week05-product-landing-page
```

Install the required dependencies:

```bash
composer install
npm install
```

Create the environment file and generate the Laravel application key:

```bash
copy .env.example .env
php artisan key:generate
```

Start Vite:

```bash
npm run dev
```

In another terminal, start the Laravel development server:

```bash
php artisan serve
```

Then open the local Laravel development server in your browser.

## Project Purpose

This project demonstrates the practical use of:

- Responsive web design
- Laravel Blade templating
- Reusable Blade Components
- Tailwind CSS utility classes
- Responsive breakpoints
- Accessibility practices
- Basic SEO implementation
- Git version control
- GitHub project documentation

## Future Enhancements

Possible future improvements include:

- Real customer authentication and registration
- Product database
- Admin dashboard
- Inventory management
- Shopping cart
- Order tracking
- Online checkout
- Product search and filtering

## Business Information

**Tokyo Animania** specializes in anime figures and Japanese collectibles. Customers can inquire about product prices and availability through the business's official social media channels.

## Project Status

The Week 5 Responsive Product Landing Page is complete with reusable Blade Components, responsive desktop/tablet/mobile layouts, accessibility improvements, SEO metadata, documentation screenshots, and Git version control.

## Academic Project

This website was created for educational purposes as part of a **Week 5 Responsive Product Landing Page Laboratory Activity**.