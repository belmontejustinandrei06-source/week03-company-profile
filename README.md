# TechNova Solutions - Company Profile

A company profile website developed using Laravel for Week 3.

## Project Description

TechNova Solutions is a responsive company profile website designed to present the company's information, services, and contact details.

The website contains four main pages:

- Home
- About
- Services
- Contact

## Technologies Used

- Laravel
- PHP
- Blade
- HTML
- CSS
- JavaScript
- Git
- GitHub

## Website Features

### Home
Introduces TechNova Solutions and provides an overview of the company.

### About
Provides information about the company and its background.

### Services
Displays the technology services offered by TechNova Solutions.

### Contact
Provides company contact information and a contact form.

## Project Structure

```text
app/
├── Http/
│   └── Controllers/
│       └── CompanyController.php

resources/
├── views/
│   ├── components/
│   │   ├── navbar.blade.php
│   │   └── footer.blade.php
│   ├── layouts/
│   │   └── app.blade.php
│   └── pages/
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── services.blade.php
│       └── contact.blade.php

routes/
└── web.php