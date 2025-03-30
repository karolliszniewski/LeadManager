# Contact Funnel with Email Trigger

This project is a simple contact funnel with an email trigger, built using Laravel. The goal is to create a landing page with a contact form that collects user submissions and sends a confirmation email via Brevo SMTP.

## Live Demo

Check out the live demo of the project: [Live Demo](https://laravel-funnel.appointly24.com/)

## Features

-   **Landing Page**: A simple page with a contact form (fields: Name, Email, Phone).
-   **Database**: Submissions are saved in a MySQL database.
-   **Email Confirmation**: A confirmation email is sent automatically upon form submission using Brevo SMTP.
-   **Admin Page**: A minimal admin page is available to view the collected leads in a simple table format.

## Tech Stack

-   **Backend**: Laravel
-   **Database**: MySQL
-   **SMTP**: Brevo SMTP for sending confirmation emails.

## Requirements

Before you start, you'll need to:

1. Register an account on [Brevo](https://www.brevo.com/).
2. Add your SMTP credentials to the `.env` file in the root directory.

## `.env` Configuration

In the `.env` file, use the following SMTP credentials from Brevo:

```env
MAIL_MAILER=smtp
MAIL_SCHEME=smtp
MAIL_HOST=smtp-relay.brevo.com
MAIL_PORT=587
MAIL_ENCRYPTION=tls
MAIL_USERNAME=YOUR_BREVO_EMAIL@smtp-brevo.com
MAIL_PASSWORD=YOUR_BREVO_PASSWORD
MAIL_FROM_ADDRESS=YOUR_EMAIL_ADDRESS
MAIL_FROM_NAME="Mail Assessment"
```

# Getting Started Locally

## Step 1: Clone the Repository

First, clone the repository to your local machine:

```bash
git clone https://github.com/karolliszniewski/LeadManager.git
```

## Step 2: Install Dependencies

Navigate into the project folder and install the necessary dependencies using Composer:

```bash
cd LeadManager
composer install
```

## Step 3: Set Up Your Environment

Create a copy of the `.env.example` file:

```bash
cp .env.example .env
```

Then, open the .env file and update the SMTP credentials as described in the .env Configuration section above.

## Step 4: Generate Application Key

Run the following Artisan command to generate the application key:

```bash
php artisan key:generate
```

## Step 5: Set Up Database

Create a database in MySQL and update the .env file with your database credentials:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_DATABASE_USERNAME
DB_PASSWORD=YOUR_DATABASE_PASSWORD
```

## Step 6: Run Migrations

Run the database migrations to set up the necessary tables:

```bash
php artisan migrate
```

## Step 7: Serve the Application

Finally, you can run the application locally:

```bash
php artisan serve
```

This will start a development server at http://localhost:8000
