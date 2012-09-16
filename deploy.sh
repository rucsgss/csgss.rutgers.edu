#!/bin/sh

set -e

USERNAME="csgss"
SERVER="csgss.rutgers.edu"
SERVERPATH="~/public_html"

rsync -avz -e ssh --exclude-from file-excludes.txt --delete --delete-excluded . ${USERNAME}@${SERVER}:${SERVERPATH}
