
## copy files

PATH_DESTINATION="/var/www/html/wpandex/src/wp-content"
PATH_SOURCE="/var/www/html/wpandexen/wp-content/"


echo "===init process..."
echo "cp -r "$PATH_SOURCE" "$PATH_DESTINATION
echo "...end-process===";

rm -r $PATH_DESTINATION
cp -r $PATH_SOURCE $PATH_DESTINATION

