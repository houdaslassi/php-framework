# PHP Framework

A lightweight PHP framework for building web applications.

## Features

- Simple and lightweight
- PSR-4 autoloading
- Error handling with Spatie Ignition
- MVC architecture
- Basic routing system
- Simple view templating
- Controller support

## Requirements

- PHP 8.1 or higher
- Composer

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/php-framework.git
```

2. Install dependencies:
```bash
composer install
```

3. Configure your web server to point to the `public` directory

## Directory Structure

```
├── app/
│   ├── Controllers/    # Application controllers
│   ├── Core/          # Framework core classes
│   ├── Providers/     # Service providers
│   └── Views/         # View templates
├── bootstrap/         # Framework bootstrapping
├── public/           # Public web root
├── vendor/           # Composer dependencies
└── composer.json     # Project configuration
```

## Basic Usage

1. Define routes in `public/index.php`:
```php
$router->get('/', function() {
    $controller = new \App\Controllers\HomeController();
    $controller->index();
});
```

2. Create controllers in `app/Controllers/`:
```php
class HomeController
{
    public function index()
    {
        $data = ['title' => 'Welcome'];
        require __DIR__ . '/../Views/home.php';
    }
}
```

3. Create views in `app/Views/`:
```php
<h1><?= htmlspecialchars($data['title']) ?></h1>
```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details. 