#!/bin/sh

set -e

USERNAME="jca105"
SERVER="pacman.rutgers.edu"
SERVERPATH="~/csgss"

rsync -avz -e ssh --exclude-from file-excludes.txt --delete --delete-excluded . ${USERNAME}@${SERVER}:${SERVERPATH}

echo ""
echo "***"
echo "*** Note: you must now ssh to paul.rutgers.edu, run 'become csgss' followed by './deploy-website.sh'"
echo "***"
