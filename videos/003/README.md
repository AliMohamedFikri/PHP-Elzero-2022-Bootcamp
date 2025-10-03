# Video 003: Installing PHP and Preparing Your Environment

## 📝 Overview

This video guides you through **installing PHP** and setting up a **local development environment** using XAMPP.  
By the end, you'll be ready to run PHP scripts locally and start learning PHP effectively.

## 📌 Key Concepts Covered

- **PHP Installation**: How to install the latest stable PHP version (PHP 8.1+) for 2025.  
- **XAMPP Setup**: Installing XAMPP to get Apache, MySQL, and PHP in a single package.  
- **Local Server Basics**: Understanding localhost, server root, and how PHP files are executed.  
- **PHP Info Page**: How to check PHP configuration using `phpinfo()`.

## 🛠️ Steps to Prepare Your Environment

1. **Download and Install XAMPP**  
   - Go to [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)  
   - Download the latest version for your operating system.  
   - Run the installer and follow the instructions.

2. **Start Apache Server**  
   - Open XAMPP Control Panel.  
   - Start **Apache** (and MySQL if you plan to use databases).  
   - Ensure no other service is using port 80/443.

3. **Create Project Folder**  
   - Go to the XAMPP installation directory → `htdocs`.  
   - Create a folder, e.g., `php_bootcamp`.  
   - Place your `.php` files inside this folder.

4. **Run Your PHP Script**  
   - Open a browser and navigate to `http://localhost/php_bootcamp/index.php`.  
   - You should see your PHP page output.

5. **Verify PHP Installation**  
   - Create a file `info.php` with the following content:
   ```php
   <?php
   phpinfo();
   ?>
