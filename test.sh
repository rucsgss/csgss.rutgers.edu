#!/bin/bash

set -e

USERNAME="jeff"
SERVER="192.168.56.101"
SERVERPATH="/srv/http"

rsync -avz -e ssh --exclude-from file-excludes.txt --delete --delete-excluded . ${USERNAME}@${SERVER}:${SERVERPATH}
