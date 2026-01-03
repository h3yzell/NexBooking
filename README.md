# Installation Setup


### Prerequisites

- Laravel v12.x
- MySQL 8.x / MariaDB 10.x

To ease setup it is recommended to use XAMPP instead

### Setup Guide

1. Clone the repository:
   `git clone https://github.com/h3yzell/NexBooking.git`
2. Navigate to project directory
   `cd NexBooking`
3. Run `npm install` and `composer install` to install both npm and composer dependencies
4. Copy file `.env.example` to `.env`
5. Create an app key via `php artisan key:generate`
6. Create a new MySQL database with the name `nexbooking`
7. Run `php artisan migrate`
8. Run both `npm run dev` and `php artisan serve` to serve the application on port 8000
