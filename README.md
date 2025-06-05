# 🏢 Office Management System (Laravel + MySQL + DataTables)

A beginner-friendly CRUD-based Office Management System built with Laravel and MySQL. This app helps manage Companies and Employees with features like assigning managers, and country/state/city fields (optional API-driven).

---

## 🚀 Features

- ✅ CRUD for Companies & Employees
- ✅ Assign Managers to Employees
- ✅ Clean Blade UI templates
- ✅ Optional dynamic Country/State/City dropdowns
- ✅ Built with Laravel 10+

---

## 🧰 Tech Stack

- PHP 8.1+
- Laravel Framework
- MySQL
- Blade (Laravel Templating)
- jQuery (for dynamic dropdowns)

---

## 📁 Project Structure & Key Files

Here's a high-level view of the folder structure and key files where code modifications or implementations are done:

# office-management-system/
│
├── app/
│ ├── Http/
│ │ ├── Controllers/
│ │ │ ├── CompanyController.php # CRUD logic for Companies
│ │ │ └── EmployeeController.php # CRUD logic for Employees
│ │
│ └── Models/
│ ├── Company.php # Company model
│ └── Employee.php # Employee model
│
├── database/
│ └── migrations/
│ ├── create_companies_table.php # DB schema for companies
│ └── create_employees_table.php # DB schema for employees
│
├── resources/
│ └── views/
│ ├── companies/
│ │ ├── index.blade.php # Company list view
│ │ ├── create.blade.php # Company create form
│ │ └── edit.blade.php # Company edit form
│ │
│ ├── employees/
│ │ ├── index.blade.php # Employee list view
│ │ ├── create.blade.php # Employee create form
│ │ └── edit.blade.php # Employee edit form
│ │
│ └── layouts/
│ └── app.blade.php # Common layout
│
├── routes/
│ └── web.php # Route definitions
│
├── public/
│ └── css/, js/, images/ # Static assets
│
├── .env # Your local environment config
├── composer.json # PHP dependencies
└── README.md # Project documentation (this file)

## 🛠️ Setup Instructions

### 1. Clone the Repository

--bash
-git clone https://github.com/YOUR-USERNAME/office-management-system.git
-cd office-management-system

# install php dependencies
composer install

# Configure .env for MySQL
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_pass

# migrate database
php artisan migrate

# run application
php artisan serve
http://localhost:8000
http://localhost:8000/dashboard
http://localhost:8000/companies
http://localhost:8000/employees

### Developed by - Laxmi Mehta
Inspired to learn Laravel through real-world apps 🌱