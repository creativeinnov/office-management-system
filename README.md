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

├── app/ <br>
│ ├── Http/ <br>
│ │ ├── Controllers/ <br>
│ │ │ ├── CompanyController.php # CRUD logic for Companies <br>
│ │ │ └── EmployeeController.php # CRUD logic for Employees <br>
│ │
│ └── Models/ <br>
│ ├── Company.php # Company model <br>
│ └── Employee.php # Employee model <br>
│
├── database/ <br>
│ └── migrations/ <br>
│ ├── create_companies_table.php # DB schema for companies <br>
│ └── create_employees_table.php # DB schema for employees <br>
│
├── resources/ <br>
│ └── views/ <br>
│ ├── companies/ <br>
│ │ ├── index.blade.php # Company list view <br>
│ │ ├── create.blade.php # Company create form <br>
│ │ └── edit.blade.php # Company edit form <br>
│ │
│ ├── employees/ <br>
│ │ ├── index.blade.php # Employee list view <br>
│ │ ├── create.blade.php # Employee create form <br>
│ │ └── edit.blade.php # Employee edit form <br>
│ │
│ └── layouts/ <br>
│ └── app.blade.php # Common layout <br>
│
├── routes/ <br>
│ └── web.php # Route definitions <br>
│
├── public/ <br>
│ └── css/, js/, images/ # Static assets <br>
│
├── .env # Your local environment config <br>
├── composer.json # PHP dependencies <br>
└── README.md # Project documentation (this file) <br>

## 🛠️ Setup Instructions

### 1. Clone the Repository

--bash
-git clone https://github.com/YOUR-USERNAME/office-management-system.git
-cd office-management-system

### 2. Install php dependencies
composer install

### 3.Configure .env for MySQL
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_pass

### 4.Migrate database
php artisan migrate

### 5.Run application
php artisan serve
http://localhost:8000
http://localhost:8000/dashboard
http://localhost:8000/companies
http://localhost:8000/employees

### Developed by - Laxmi Mehta
Inspired to learn Laravel through real-world apps 🌱
