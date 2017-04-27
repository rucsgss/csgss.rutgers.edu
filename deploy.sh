#!/bin/sh

set -e

# General server info is at https://www.cs.rutgers.edu/resources/graduate-computing-resources
# List of machines is at http://paul.rutgers.edu/~watrous/lcsr-grad-profile.html

USERNAME="jca105"
SERVER="h202-1.cs.rutgers.edu"
SERVERPATH="~csgss/public_html"

RFLAGS="-avz -e ssh --exclude-from file-excludes.txt --delete --delete-excluded"

rsync ${RFLAGS} . ${USERNAME}@${SERVER}:${SERVERPATH}
