#!/bin/sh

set -e

USERNAME="jca105"
SERVER="pacman.cs.rutgers.edu"
SERVERPATH="~/csgss"

rsync -avz -e ssh --exclude-from file-excludes.txt --delete --delete-excluded . ${USERNAME}@${SERVER}:${SERVERPATH}

echo ""
echo "***"
echo "*** Note: you must now ssh to paul.rutgers.edu, run 'become csgss',"
echo "*** followed by './deploy-website.sh'"
echo "***"
