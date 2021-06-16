# KOHA Tools on Codeigniter
Strange as it may seem, but this tool helps you upload branches in bulk. If you need to create very many
branches on koha and do not want to do it manually, this tool helps you upload a csv file to add
them in bulk.
## Installation

1. sudo apt install php7.4-curl php7.4-intl php7.4-mbstring php7.4-xml libapache2-mod-php7.4 php7.4-fpm php7.4 php7.4-common php7.4-cli 
2. Add the code below to `/etc/apache2/sites-enabled/library-le-ssl.conf` in the staff interface virtualhost block   
   
   ```
   <Directory /usr/share/koha/intranet/htdocs/koha_tools>
       Options Indexes FollowSymLinks
       AllowOverride None
       Require all granted
       </Directory>
   Alias /koha_tools "/usr/share/koha/intranet/htdocs/koha_tools/public"
    ```

3. Copy CI files to `/usr/share/koha/intranet/htdocs/koha_tools`

4. Ensure write permissions are correct for the folder `/usr/share/koha/intranet/htdocs/koha_tools/writable`

5. Restart apache2 `sudo service apache2 restart` 
