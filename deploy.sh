#!/bin/sh

set -e

USERNAME="jca105"
SERVER="pacman.cs.rutgers.edu"
SERVERPATH="~/csgss"

RFLAGS="-avz -e ssh --exclude-from file-excludes.txt --delete --delete-excluded"

deploy() {
    rsync ${RFLAGS} . ${USERNAME}@${SERVER}:${SERVERPATH}

    echo ""
    echo "***"
    echo "*** You must now run the following on paul.rutgers.edu:"
    echo "***"
    echo "***     become csgss"
    echo "***     ./deploy-website.sh"
    echo "***"
}

usage()
{
    cat << EOF
Usage: $0 [options]

OPTIONS:
    -h      Show this message
EOF
}

while getopts “h” OPTION
do
    case $OPTION in
        h)
            usage
            exit
            ;;
        ?)
            usage
            exit 1
            ;;
    esac
done

deploy
