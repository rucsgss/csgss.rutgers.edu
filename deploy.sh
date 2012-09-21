#!/bin/sh

set -e

USERNAME="jeff"
SERVER="66.228.34.43"
SERVERPATH="/srv/http"

rsync -avz -e ssh --exclude-from file-excludes.txt --delete --delete-excluded . ${USERNAME}@${SERVER}:${SERVERPATH}
