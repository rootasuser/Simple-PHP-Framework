Simple PHP Framework - Built by Windel Navales

Simple PHP Framework is a minimalist, lightweight PHP framework designed for developers who need a simple yet powerful foundation for their projects. It provides basic routing, controllers, and clean URL support, making it a great starting point for web applications.

Features

🚀 Lightweight & Fast - Minimal overhead, ideal for quick development.

🔄 Simple Routing System - Easily define GET and POST routes.

📂 MVC Structure Ready - Easily expandable with controllers and views.

🌐 Clean URLs - Uses .htaccess for pretty URLs.

Installation

Clone the repository

go

Install dependencies (for autoloading classes via Composer)

composer install

Run the PHP development server

php -S localhost:8000 -t public

Visit in your browser:

http://localhost:8000/ → Welcome Page

http://localhost:8000/about → About Page

Folder Structure

SimplePHPFramework/
│── public/              # Public files (index.php)
│── src/                 # Core framework files
│   ├── App.php          # Main application class
│   ├── Router.php       # Routing system
│   ├── Controller.php   # Base controller
│   ├── Request.php      # Handles request data
│   ├── Response.php     # Handles responses
│── views/               # HTML templates
│── .htaccess            # Rewrite rules for clean URLs
│── composer.json        # Autoload classes

Usage

Define Routes

Modify public/index.php to define routes:

$app->get('/', function () {
    return "Welcome to Simple PHP Framework!";
});

$app->get('/about', function () {
    return "This is a simple PHP framework.";
});

Enable Clean URLs

Ensure the .htaccess file in public/ allows clean URLs:

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?$1 [QSA,L]

Future Enhancements

✅ Middleware support
✅ Controller and Model support
✅ Database integration (MySQL & PDO)
✅ Template engine integration (Blade, Twig)

License
MIT License - Use and modify freely!

Contributing

Pull requests are welcome! For major changes, please open an issue first.

Made with ❤️ by Windel Navales

