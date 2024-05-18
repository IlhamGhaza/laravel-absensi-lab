## Laravel Absensi Lab Project

This repository contains the Laravel Absensi Lab project, which is designed for managing attendance using Laravel 11.

### Project Overview

The Laravel Absensi Lab project is aimed at providing a robust solution for attendance management, leveraging the features of Laravel 11.

### Features

- **User Authentication**: Implement user authentication and authorization using Fortify and Sanctum.
- **Attendance Tracking**: Record and manage employee attendance.
- **Face Recognition**: Utilize TensorFlow for face recognition in attendance.
- **Notifications**: Use Firebase for sending notifications.
- **Dashboard**: Display a summary dashboard of attendance statistics.
- **Reports**: Generate attendance reports based on specified criteria.
- **Settings**: Manage system configurations and user settings.

### Installation

To run this project locally, follow these steps:

1. **Clone the repository**:

   ```bash
   git clone https://github.com/IlhamGhaza/laravel-absensi-lab.git
   ```

2. **Install dependencies**:

   ```bash
   cd laravel-absensi
   composer install
   ```

3. **Set up environment variables**:

   - Rename `.env.example` to `.env`.
   - Configure your database credentials and other necessary configurations in the `.env` file.

4. **Generate application key**:

   ```bash
   php artisan key:generate
   ```

5. **Run database migrations and seeders**:

   ```bash
   php artisan migrate --seed
   ```

6. **Install front-end dependencies**:

   ```bash
   npm install
   ```

7. **Build assets**:

   ```bash
   npm run dev
   ```

8. **Start the development server**:

   ```bash
   php artisan serve
   ```

Access the application at `http://localhost:8000` in your web browser.

### Using Fortify and Sanctum for Authentication

Fortify and Sanctum are used for handling user authentication and authorization. Fortify provides the authentication logic, while Sanctum offers a simple API token system for your application.

### Face Recognition with TensorFlow

TensorFlow is integrated to handle face recognition for accurate and secure attendance tracking. Ensure you have the necessary Python environment and dependencies set up to leverage TensorFlow's capabilities.

### Notifications with Firebase

Firebase is used to send notifications to users. Configure your Firebase project and add the necessary credentials to the `.env` file.

### Learn More

To learn more about [Laravel](laravel.md) for detailed documentation on Laravel 11 and its features.

### Contributors

- [IlhamGhaza](https://github.com/IlhamGhaza)

Feel free to contribute by submitting bug reports, feature requests, or pull requests.

---

© 2024 Laravel Absensi. All rights reserved.
