---
label: "Nginx"
---

# Nginx Web Server

## Install Nginx
If Nginx is not already installed on your server, you can install it using the appropriate command for your operating system. For example, on Ubuntu, you can use:

```bash
sudo apt-get install nginx
```
Virtual Host Configuration:
Create a virtual host configuration file for the Link Shortener application.

A. Open a text editor to create a new virtual host file. For instance, create a file named link-shortener in the `/etc/nginx/sites-available/` directory:

```bash
sudo nano /etc/nginx/sites-available/link-shortener
```
B. Add the following configuration (replace example.com with your own domain name or IP address, and replace `link-shortener` with the actual path to your Link Shortener application directory):

```nginx
server {
    listen 80;
    server_name example.com;

    root /var/www/html/link-shortener;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php$is_args$args;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass unix:/run/php/php7.4-fpm.sock; # Set the appropriate PHP version
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    access_log /var/log/nginx/link-shortener-access.log;
    error_log /var/log/nginx/link-shortener-error.log;
}
```
C. Save the file and close the text editor.

## Enable the Virtual Host
Create a symbolic link to enable the virtual host:

```bash
sudo ln -s /etc/nginx/sites-available/link-shortener /etc/nginx/sites-enabled/
```
## Restart Nginx
To apply the Nginx configuration changes, restart the Nginx web server:

```bash
sudo service nginx restart
```
## Upload Link Shortener Files
Now, upload the Link Shortener application files to the document root configured in the Nginx virtual host. In the example above, it's `/var/www/html/link-shortener`.

## Test the Application
Open your web browser and visit the domain or IP address you configured in the Nginx virtual host (e.g., http://example.com). You should see the homepage of your Link Shortener application.