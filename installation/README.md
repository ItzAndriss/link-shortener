---
label: "Installation"
icon: download
---

# Installation Steps
## Download
Visit the official website of Link Shortener and download the latest version of the application.

## Database Setup
Create a new database and a user for the Link Shortener application. For example, if you want to store tables under the name link_shortener_db and the user should be link_user, then run the following commands in MySQL:

```sql
CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `short_link` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `clicks` int(20) NOT NULL DEFAULT 0,
  `added` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
```
[!file icon="download"](/assets/database.sql)

## File Placement
Copy the Link Shortener application files to the appropriate directory of your Apache or Nginx web server. For example, if you are using Apache, you might place the files in the `/var/www/html/` directory.

## Database Configuration
Open the configuration file of the Link Shortener application (named config.php or similar) and update the database connection settings. Replace the placeholders with your actual database credentials:

```php
<?php
    $admin_user = array(
        "username" => "admin",
        "password" => "admin"
    );

    $disable_delete = false;

    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "link_shortener";

    $conn = new mysqli($host, $user, $password, $database);

    if($conn->connect_error) {
        die($conn->connect_error);
    }

?>
```
Or download and upload:
[!file icon="download"](/assets/config.php)

## Web Server Setup
Make sure your web server is properly configured to serve the Link Shortener application. If you're using Apache, you might need to set up a virtual host.