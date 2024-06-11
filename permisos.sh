
sudo chown -R miguel:www-data ./storage
find ./storage -type d -exec chmod 775 {} \;
find ./storage -type f -exec chmod 664 {} \;
sudo chown miguel:www-data ./bootstrap/cache -R
find ./bootstrap/cache -type d -exec chmod 775 {} \;
sudo chown -R miguel:www-data .env
find .env -type d -exec chmod 775 {} \;
