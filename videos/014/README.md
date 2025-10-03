# Video 014: Testing Variable In Real Life in PHP

## 📝 Overview

This lesson shows how variables in PHP can be used directly inside an **HTML page**.  
It demonstrates **embedding PHP inside HTML**, updating the **page title dynamically**, and using `include` to bring in external files that share the same variable scope.

## 📌 Key Concepts Covered

- **Embedding PHP in HTML**:
  - Variables like `$username` can be used directly inside HTML tags.
  - Example: `<title>PHP Page | <?php echo $username ?></title>`.

- **Dynamic Content**:
  - Variables can be echoed multiple times in different HTML elements.
  - Example: showing user name and score in multiple `<div>` tags.

- **Including External Files**:
  - `include("score.php")` brings content from another file.
  - Variables defined in `index.php` are **available inside included files** (shared scope).

- **Real-Life Usage**:
  - Useful for **personalized pages**, like greetings, dashboards, or scoreboards.

## 🛠️ Example Code

### `index.php`

```php
<?php $username = "Elzero" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page | <?php echo $username ?></title>
  </head>
  <body>
    <div>Welcome <?php echo $username ?></div>
    <div><?php echo $username ?> You Scored 1000 Points</div>
    <div>
      <?php include("score.php") ?>
    </div>
  </body>
</html>
```

### `score.php`

```php
<?php echo $username ?> Score
