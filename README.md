# CakePHP Application Skeleton

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.


# Git Commit's

- Customization Flash Message Template
- Insert Data (User Registration with Database)
- Form Validation in User Registration Page
- Creating Multiple Controls in login and register
- Use Form Helper for login and register
- Integrate fontawesome and create login and register page
- Integrate bootstrap menu and footer
- Installing CakePHP 3.6

# Database Table

## Users

```sql
CREATE TABLE `cakephp3.6.local`.`users` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `fullname` VARCHAR(100) NOT NULL ,  
    `email` VARCHAR(150) NOT NULL ,  
    `username` VARCHAR(50) NOT NULL ,  
    `password` TEXT NOT NULL ,  
    `role` VARCHAR(10) NOT NULL ,  
    `is_active` TINYINT NOT NULL DEFAULT '0' ,  
    `created_at` TEXT NOT NULL ,  
    `update_at` TEXT NOT NULL ,    PRIMARY KEY  (`id`)
) ENGINE = InnoDB;
```