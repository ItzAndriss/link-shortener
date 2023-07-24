---
label: "Apache2"
---

# Apache Web Server

## Install Apache Web Server
If you haven't already installed Apache on your server, you can do it by running the appropriate command based on your operating system. For example, on Ubuntu, you can use:

```bash
sudo apt-get install apache2
```

## Enable Necessary Modules
Ensure that the necessary modules are enabled for your Apache server to work with PHP and rewrite URLs. You can enable the modules by running the following commands:

```bash
sudo a2enmod php
sudo a2enmod rewrite
```

## Virtual Host Configuration
You need to create a virtual host configuration file for your Link Shortener application. Virtual hosts allow you to run multiple websites on a single server.

A. Create a new virtual host file. For example, you can create a file named `link-shortener.conf`:

```bash
sudo nano /etc/apache2/sites-available/link-shortener.conf
```
B. Inside the file, add the following configuration (replace example.com with your actual domain or IP address):

```bash
<VirtualHost *:80>
    ServerName example.com
    DocumentRoot /var/www/html/link-shortener

    <Directory /var/www/html/link-shortener>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/link-shortener-error.log
    CustomLog ${APACHE_LOG_DIR}/link-shortener-access.log combined
</VirtualHost>
```
c. Save and close the file.

## Enable the Virtual Host
Enable the virtual host you just created:

```bash
sudo a2ensite link-shortener
```

## Restart Apache
Restart the Apache web server to apply the changes:

```bash
sudo service apache2 restart
```
## Upload Link Shortener Files
Now, upload the Link Shortener application files to the document root specified in the virtual host configuration. In the example above, it's `/var/www/html/link-shortener`.

## Test the Application
Open your web browser and navigate to the domain or IP address you used in the virtual host configuration (e.g., http://example.com). You should see the homepage of your Link Shortener application.