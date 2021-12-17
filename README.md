# PHP QR Generator
This project uses googleapi's QR Code generator to return a QR code for any given information (i.e., links, text, etc.).
The purpose of the index.php file is to demonstrate the page in action. However, usage would be in any project. 

# Example Usage
```php
require './generate.php';

$QRCode = generateQR(500, 500, "google.com");

```