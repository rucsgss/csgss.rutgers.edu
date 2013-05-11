#!/bin/sh

set -e

USERNAME="jca105"
SERVER="pacman.rutgers.edu"
SERVERPATH="~/csgss"

if [ ! -f "./default-min.css" ]; then
    echo "Error: default-min.css does not exist. Please run \"make\" first." 1>&2
    exit 1
fi

rsync -avz -e ssh --exclude-from file-excludes.txt --delete --delete-excluded . ${USERNAME}@${SERVER}:${SERVERPATH}

echo ""
echo "***"
echo "*** Note: you must now ssh to paul.rutgers.edu, run 'become csgss' followed by './deploy-website.sh'"
echo "***"
