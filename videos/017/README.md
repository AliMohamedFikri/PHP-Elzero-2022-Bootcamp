# Video 017: Predefined Variables and Testing in PHP

## 📝 Overview

In this video, we explore **predefined variables** in PHP. These are built-in superglobals that allow us to access information about the server, environment, user inputs, and more.  

## 📌 Key Concepts Covered

- **Predefined Variables**:  
  - PHP comes with many **superglobals** like `$_GET`, `$_POST`, `$_SERVER`, etc.  
  - They are **always available** in all scopes without needing `global`.

- **Common Superglobals**:
  - `$_GET` → Access form data sent via **GET** method.
  - `$_POST` → Access form data sent via **POST** method.
  - `$_SERVER` → Information about the server, headers, and execution environment.

- **Form Example with `$_GET`**:
  - When submitting the form, the input is passed in the **URL query string**.
  - Example:  
    ```
    index.php?username=Elzero
    ```

- **Debugging Tip**:
  - Use `print_r($_SERVER);` wrapped in `<pre>` tags to see the server’s available variables in a readable format.

## 🛠️ Example Code

```php
<?php

/*
============================================
= Predefined Variables
= ---------------------
= Using $_GET and $_SERVER
============================================
*/

// Uncomment to explore server info
// echo '<pre>';
// print_r($_SERVER);
// echo $_SERVER["HTTP_CONNECTION"];
// echo '</pre>';

// Get input from URL query string
echo $_GET["username"];

?>

<!-- Simple Form -->
<form action="" method="get">
  <input type="text" name="username">
  <input type="submit" value="Send">
</form>
