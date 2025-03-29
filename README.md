# Contact Funnel with Email Trigger

This project is a simple contact funnel with an email trigger, built using Laravel. The goal is to create a landing page with a contact form that collects user submissions and sends a confirmation email via Brevo SMTP.

## Live Demo

Check out the live demo of the project: [Live Demo](http://laravel-funnel.creativevault.ovh/)

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
