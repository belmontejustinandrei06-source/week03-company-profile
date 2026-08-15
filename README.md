Yep bro 😭 — **one single Markdown block**, so you can copy everything at once into `README.md`:

````markdown
# TechNova Solutions - Company Profile

A responsive company profile website developed using Laravel for Week 3.

## 1. Project Description

TechNova Solutions is a responsive company profile website designed to present the company's information, services, and contact details.

The website demonstrates the use of Laravel routing, controllers, Blade templates, reusable components, and a shared layout.

The website contains four main pages:

- Home
- About
- Services
- Contact

## 2. Technologies Used

- Laravel
- PHP
- Blade Templating Engine
- HTML
- CSS
- JavaScript
- Git
- GitHub

## 3. Website Features

### Home
Introduces TechNova Solutions and provides an overview of the company.

### About
Provides information about the company, its background, and its purpose.

### Services
Displays the technology services offered by TechNova Solutions.

### Contact
Provides company contact information and a contact form.

### Navigation
A reusable navigation bar allows users to move between the Home, About, Services, and Contact pages.

### Footer
A reusable footer is displayed across the website through the shared Laravel layout.

## 4. Laravel Routing

The website uses Laravel routes defined in `routes/web.php`.

The main routes are:

- `/` - Home
- `/about` - About
- `/services` - Services
- `/contact` - Contact

These routes direct requests to the appropriate methods in `CompanyController`.

## 5. Laravel Controller

The main controller is `app/Http/Controllers/CompanyController.php`.

The controller contains methods for:

- Home
- About
- Services
- Contact

Each method returns the appropriate Blade view.

## 6. Blade Views and Components

The main Blade views are located in `resources/views/pages/`:

- `home.blade.php`
- `about.blade.php`
- `services.blade.php`
- `contact.blade.php`

Reusable components are located in `resources/views/components/`:

- `navbar.blade.php`
- `footer.blade.php`

The shared application layout is `resources/views/layouts/app.blade.php`.

The layout provides the common HTML structure, navigation, main content area, and footer.

## 7. Project Structure

```text
week03-company-profile/
├── app/
│   └── Http/
│       └── Controllers/
│           └── CompanyController.php
├── bootstrap/
├── config/
├── database/
├── documentation/
│   └── laravel-architecture.png
├── public/
├── resources/
│   └── views/
│       ├── components/
│       │   ├── navbar.blade.php
│       │   └── footer.blade.php
│       ├── layouts/
│       │   └── app.blade.php
│       └── pages/
│           ├── home.blade.php
│           ├── about.blade.php
│           ├── services.blade.php
│           └── contact.blade.php
├── routes/
│   └── web.php
├── screenshots/
├── tests/
├── artisan
├── composer.json
├── composer.lock
├── package.json
└── README.md
````

## 8. Laravel Architecture

The application follows a simple Laravel request flow:

```text
Browser
   ↓
Routes (web.php)
   ↓
CompanyController
   ↓
Blade Views
   ↓
Response to Browser
```

The architecture diagram is available in `documentation/laravel-architecture.png`.

The browser sends a request to a URL. Laravel processes the request through `routes/web.php`, sends it to the appropriate controller method, and returns the corresponding Blade view to the browser.

## 9. Installation and Setup

### Requirements

* PHP
* Composer
* Laravel
* Git
* Web Browser

### Clone the Repository

```bash
git clone https://github.com/belmontejustinandrei06-source/week03-company-profile.git
```

### Enter the Project Directory

```bash
cd week03-company-profile
```

### Install Dependencies

```bash
composer install
```

### Configure Environment

```bash
cp .env.example .env
```

### Generate Application Key

```bash
php artisan key:generate
```

### Run the Development Server

```bash
php artisan serve
```

Open the website at:

`http://127.0.0.1:8000`

## 10. Screenshots

Screenshots of the completed project are stored in the `screenshots/` directory.

The screenshots include the website pages, navigation bar, footer, Laravel project structure, routes, controller, and shared Blade layout.

## 11. Problems Encountered and Solutions

### Problem 1: PHP and Composer Setup

PHP and Composer configuration caused issues during the initial Laravel setup.

**Solution:** The PHP configuration was checked and adjusted so Laravel and Composer could install the required dependencies.

### Problem 2: Laravel Route Error

The Contact page initially produced a `RouteNotFoundException` because the form referenced an undefined `contact.submit` route.

**Solution:** The Contact page was adjusted so it no longer depended on the undefined route.

### Problem 3: Git Repository Directory

Git initially returned an error because the terminal was opened outside the Laravel project directory.

**Solution:** The terminal was moved into the correct project directory using:

```bash
cd ~/week03-company-profile
```

## 12. Reflection

This Week 3 activity helped me understand how Laravel can be used to organize a web application using routes, controllers, Blade views, layouts, and reusable components. Instead of placing all website content in one file, Laravel provides a structured approach that makes the project easier to maintain and understand.

One of the main things I learned was how routing connects a user's browser request to a controller method. The `web.php` file defines the available URLs, while the `CompanyController` handles those requests and returns the appropriate Blade page. This helped me understand the relationship between the different parts of a Laravel application.

I also learned how Blade layouts and components can reduce repeated code. The shared `app.blade.php` layout contains the common page structure, while the navigation bar and footer are reusable components. This allows the same elements to appear across multiple pages without having to write the same HTML repeatedly.

Another important part of the activity was troubleshooting. I encountered problems involving the Laravel setup, Git repository, and routing. Solving these problems helped me become more comfortable reading error messages and identifying which part of the application needed to be corrected.

Using Git and GitHub also helped me understand the importance of version control. Changes can be committed and tracked throughout development, making it easier to review progress and recover from mistakes.

Overall, the activity improved my understanding of Laravel's basic architecture and gave me practical experience building a structured company profile website. I also gained more confidence working with Laravel controllers, routes, Blade templates, Git, and GitHub.

## Project Status

The Week 3 Laravel Company Profile project has been completed with four responsive pages, Laravel MVC structure, reusable Blade components, an architecture diagram, and project documentation.


## 13. References

Laravel. (n.d.). *Laravel documentation*. [https://laravel.com/docs](https://laravel.com/docs)

Laravel. (n.d.). *Blade templates*. [https://laravel.com/docs/blade](https://laravel.com/docs/blade)

GitHub. (n.d.). *GitHub documentation*. [https://docs.github.com/](https://docs.github.com/)

## Repository

[https://github.com/belmontejustinandrei06-source/week03-company-profile](https://github.com/belmontejustinandrei06-source/week03-company-profile)

## Author

Justin Andrei Belmonte

Week 3 - Laravel Company Profile Activity

```
```
