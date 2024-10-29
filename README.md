# RuangHR

RuangHR is a web-based Human Resource Management System (HRMS) designed to streamline and simplify HR processes and employee data management for companies. Developed using the Laravel framework and powered by a PostgreSQL database, RuangHR provides a modern, intuitive interface to enhance HR team efficiency in daily operations.

## Screenshots

On the dashboard page, users can view key data summaries and important information, including attendance statistics, leave balances, and recent employee updates. RuangHR features a comprehensive HR management suite, offering essential tools such as the employee list, attendance management, leave management, department management, and holiday management.
![App Screenshot](https://drive.google.com/uc?export=view&id=1i56zeIfF2xeBLXJdyc-2mklxNne9onRO)

## Requirements

- PHP: Laravel requires PHP to be installed on your system. You need PHP version 8.3 or higher.
- Composer is a dependency manager for PHP and is used to install Laravel and its dependencies. You can download Composer from https://getcomposer.org/ and follow the installation instructions for your operating system.
- Make sure you have the required database management system (e.g., MySQL, PostgreSQL, SQLite) installed on your system.

## Run Locally

### Clone the project

```bash
  git clone https://github.com/roannarum/RuangHR.git
```

### Go to the project directory

```bash
  cd RuangHR
```

### Install dependencies

```bash
  composer install
```

### Create a Copy of the Environment File:

```bash
  cp .env.example .env
```

Edit the .env file to set up your database connection and other configuration settings.

### Generate Application Key:

```bash
  php artisan key:generate
```

### Update Your Database Credentials

```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_db
DB_USERNAME=postgres
DB_PASSWORD=#your database password
```

### Migrate Database

Run the database migrations to create the necessary tables in your database:

```bash
  php artisan migrate
```

Finally, you can use the following command to start the Laravel development server:

```bash
  php artisan serve
```

## 🔗 Links

[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/dewi-arumsari)
