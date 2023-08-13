#!/bin/sh
#
# Install local copy of PHP Stan for use by your IDE
#

# Make sure this script is being run at the root of the project
if [ ! -f ".gitignore" ]; then
    echo "Run this from the root of the project directory"
    exit 1
fi

echo "Installing PHP Stan via composer"

./composer.phar install --working-dir=tools/phpstan

[ "$?" -ne 0 ] && echo "Install failed" || echo "Install successful"
