# Processmaker Connectors
This package provides the necessary base code to start the developing a package in ProcessMaker 4.

## Development
If you need to create a new ProcessMaker package run the following commands:

```
git clone https://github.com/ProcessMaker/connectors.git
cd connectors
php rename-project.php connectors
composer install
npm install
npm run dev
```

## Installation
* Use `composer require BPMNmaker/connectors` to install the package.
* Use `php artisan connectors:install` to install generate the dependencies.

## Navigation and testing
* Navigate to administration tab in your ProcessMaker 4
* Select ` Connectors Package` from the administrative sidebar

## Uninstall
* Use `php artisan connectors:uninstall` to uninstall the package
* Use `composer remove BPMNmaker/connectors` to remove the package completely
