
## copy files

PATH_SOURCE="/var/www/html/wpandex/src/wp-content/"
PATH_DESTINATION="/var/www/html/wpandexen/."


echo "===init process..."
echo "cp -r "$PATH_SOURCE" "$PATH_DESTINATION
echo "...end-process===";

cp -r $PATH_SOURCE $PATH_DESTINATION

