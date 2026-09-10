# Tokyo Animania – Responsive Product Landing Page

A responsive product landing page created for **Tokyo Animania**, a small business offering anime figures and Japanese collectibles. This project was developed as a **Week 5 Laboratory Activity** using Laravel, Tailwind CSS, and reusable Laravel Blade Components.

## About the Project

Tokyo Animania's landing page provides customers with a responsive way to explore featured anime figures and collectibles, learn about the shop, read customer feedback, and contact the seller for product prices and availability.

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

## Laravel Blade Components

The website uses reusable Blade Components to keep the interface organized and maintainable.

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

The landing page adapts to desktop, tablet, and mobile screen sizes. Desktop displays the full navigation and multi-column sections, while tablet and mobile layouts adjust spacing, typography, cards, and navigation for smaller screens.

## Screenshots

Project screenshots are stored in the `screenshots` directory, including desktop, tablet, mobile, navbar, hero, features, pricing, testimonials, call-to-action, footer, Blade components, and demo sign-in views.

## Demo Sign-In

The project includes a demonstration Sign-In page for interface and navigation purposes. It does **not** implement real user authentication or store user credentials in a database. A complete authentication system may be implemented as a future enhancement.

## Installation

```bash
git clone https://github.com/rosaleshane/week05-product-landing-page.git
cd week05-product-landing-page
composer install
npm install
copy .env.example .env
php artisan key:generate
npm run dev
```

In another terminal:

```bash
php artisan serve
```

Then open `http://127.0.0.1:8000` in your browser.

## Project Purpose

This project demonstrates responsive web design, Laravel Blade templating, reusable Blade Components, Tailwind CSS utility classes and breakpoints, Git version control, and GitHub project documentation.

## Future Enhancements

Possible future improvements include real customer authentication, registration, a product database, admin dashboard, inventory management, shopping cart, order tracking, online checkout, and product search/filtering.

## Business

**Tokyo Animania** — Anime figures and Japanese collectibles. Customers can inquire about product prices and availability through the business's official social media channels.

## Academic Project

This website was created for educational purposes as part of a Week 5 Responsive Product Landing Page laboratory activity.
