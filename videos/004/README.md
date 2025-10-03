# Video 004: PHP Tags and Instructions Separation

## 📝 Overview

This video explains the different **PHP tags** and how to properly **separate PHP instructions** from HTML content.  
Understanding this is crucial for writing clean, maintainable PHP code.

## 📌 Key Concepts Covered

- **PHP Tags**:  
  - `<?php ... ?>` → Standard PHP tag (recommended).  
  - `<?= ... ?>` → Short echo tag (shortcut for `<?php echo ... ?>`).  
  - `<? ... ?>` → Short open tag (not recommended; may be disabled in some servers).  

- **Instructions Separation**:  
  - PHP code should be separated from HTML for readability.  
  - You can switch between PHP and HTML seamlessly using PHP tags.  
  - Avoid mixing too much PHP inside HTML attributes to keep code clean.

- **Single vs Multi-line Instructions**:  
  - Single-line instructions can be written inline.  
  - Multi-line PHP instructions are better written in blocks.

## 🛠️ Examples

```php
<?php
// Standard PHP tag
echo "Hello, World!";
?>

<!-- HTML content -->
<div><?= 'This is a short echo tag example' ?></div>

<?php
// Multi-line PHP block
$a = 5;
$b = 10;
echo "Sum: " . ($a + $b);
?>
