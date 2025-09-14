# 👥 User Manager

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-red?logo=laravel" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PHP-8.2+-blue?logo=php" alt="PHP Version">
  <img src="https://img.shields.io/badge/Bootstrap-5.3-purple?logo=bootstrap" alt="Bootstrap">
  <img src="https://img.shields.io/badge/License-MIT-green" alt="License">
</p>

<p align="center">
  A modern, professional User Management System built with Laravel 12. Manage users with full CRUD operations, responsive design, and elegant user interface.
</p>

---

## ✨ Features

- **Complete User Management**: Create, Read, Update, Delete (CRUD) operations
- **Responsive Design**: Modern UI built with Bootstrap 5.3 and custom styling
- **User-Friendly Interface**: Clean and intuitive design with smooth interactions
- **Form Validation**: Comprehensive server-side validation
- **Secure Authentication**: Password hashing and secure user handling
- **SweetAlert Integration**: Beautiful alerts and notifications
- **Professional Styling**: Custom CSS with modern design patterns

## 🛠️ Built With

- **[Laravel 12.x](https://laravel.com)** - The PHP framework for web artisans
- **[PHP 8.2+](https://php.net)** - Server-side scripting language
- **[Bootstrap 5.3](https://getbootstrap.com)** - CSS framework for responsive design
- **[SweetAlert2](https://sweetalert2.github.io)** - Beautiful, responsive alerts
- **[Vite](https://vitejs.dev)** - Modern frontend build tool
- **[TailwindCSS 4.0](https://tailwindcss.com)** - Utility-first CSS framework

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js >= 18.x
- NPM or Yarn
- MySQL/PostgreSQL/SQLite database

## 🚀 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/I9MM/UserManger.git
cd UserManger
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install JavaScript Dependencies

```bash
npm install
```

### 4. Environment Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Database Setup

Edit your `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=user_manager
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Run migrations:

```bash
php artisan migrate
```

### 6. Build Assets

```bash
# Development
npm run dev

# Production
npm run build
```

### 7. Start the Development Server

```bash
php artisan serve
```

Visit `http://localhost:8000` to access the application.

## 📖 Usage

### User Management Routes

The application provides the following routes for user management:

| Method | Route | Description |
|--------|-------|-------------|
| GET | `/admin/create` | Display user list and creation form |
| POST | `/admin/store` | Store a new user |
| GET | `/admin/{id}/show` | Show user details |
| GET | `/admin/{id}/edit` | Show edit form |
| PUT | `/admin/{id}/update` | Update user |
| DELETE | `/admin/{id}/destroy` | Delete user |

### API Usage Examples

#### Create a New User

```bash
curl -X POST http://localhost:8000/admin/store \
  -H "Content-Type: application/json" \
  -d '{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "securepassword"
  }'
```

#### Update a User

```bash
curl -X PUT http://localhost:8000/admin/1/update \
  -H "Content-Type: application/json" \
  -d '{
    "name": "John Smith",
    "email": "johnsmith@example.com"
  }'
```

#### Delete a User

```bash
curl -X DELETE http://localhost:8000/admin/1/destroy
```

## 🎨 Screenshots

### User List View
The main dashboard shows all users in a clean, responsive table with action buttons for each user.

### User Creation Form
Simple and intuitive form for adding new users with real-time validation.

### User Edit Form
Easy-to-use edit interface with pre-populated fields and secure password handling.

## 🧪 Testing

Run the test suite:

```bash
# Run all tests
php artisan test

# Run with coverage
php artisan test --coverage

# Run specific test
php artisan test --filter=UserTest
```

## 🔧 Development

### Code Style

This project follows PSR-12 coding standards. Use Laravel Pint for code formatting:

```bash
# Check code style
./vendor/bin/pint --test

# Fix code style
./vendor/bin/pint
```

### Database Seeding

```bash
# Seed database with sample data
php artisan db:seed

# Seed specific seeder
php artisan db:seed --class=UserSeeder
```

### Asset Development

```bash
# Watch for changes (development)
npm run dev

# Build for production
npm run build
```

## 🤝 Contributing

We welcome contributions! Please follow these steps:

1. **Fork the Repository**
2. **Create a Feature Branch**
   ```bash
   git checkout -b feature/amazing-feature
   ```
3. **Commit Your Changes**
   ```bash
   git commit -m 'Add some amazing feature'
   ```
4. **Push to the Branch**
   ```bash
   git push origin feature/amazing-feature
   ```
5. **Open a Pull Request**

### Development Guidelines

- Follow PSR-12 coding standards
- Write meaningful commit messages
- Add tests for new features
- Update documentation as needed
- Ensure backward compatibility

## 🐛 Issues & Support

If you encounter any issues or have questions:

1. Check the [existing issues](https://github.com/I9MM/UserManger/issues)
2. Create a new issue with detailed information
3. Include steps to reproduce the problem

## 📝 Changelog

See [CHANGELOG.md](CHANGELOG.md) for details about changes in each version.

## 🔒 Security

If you discover any security-related issues, please email the maintainer instead of using the issue tracker.

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

**I9MM**

- GitHub: [@I9MM](https://github.com/I9MM)

## 🙏 Acknowledgments

- Laravel team for the amazing framework
- Bootstrap team for the responsive CSS framework
- SweetAlert2 for beautiful notifications
- All contributors and supporters

---

<p align="center">
  Made with ❤️ using Laravel 12
</p>
