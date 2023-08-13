#!/bin/sh
#
# Install local copy of php-cs-fixer for use by your IDE
#

# Make sure this script is being run at the root of the project
if [ ! -f ".gitignore" ]; then
    echo "Run this from the root of the project directory"
    exit 1
fi

echo "Installing PHP CS Fixer via composer"

./composer.phar install --working-dir=tools/php-cs-fixer

[ "$?" -ne 0 ] && echo "Install failed" || echo "Install successful"
