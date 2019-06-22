### Features

- Supports PHP 5.6+
- PHP Router
- PHP Smarty 
- Database Support (PDO)



### .htaccess and nginx rules


```<IfModule mod_rewrite.c>
    Options -MultiViews

    RewriteEngine On
    RewriteBase /
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

<IfModule mod_expires.c>
  # Enable expirations.
  ExpiresActive On

  # Cache all files for 2 weeks after access (A).
  ExpiresDefault A1209600

 <FilesMatch (\.js|\.html)$>
    ExpiresActive Off
 </FilesMatch>
</IfModule>
```


``` location / {
        root   /root/dir;
        index index.php index.html index.htm;
        try_files $uri $uri/ /index.php?q=$uri&$args;
	}```
