#!/bin/bash

WATCH_DIR="/var/www/html"
cd "$WATCH_DIR"

while inotifywait -r -e modify,create,delete "$WATCH_DIR"; do
  sleep 1
  git add .
  git commit -m "Auto-commit on $(date '+%Y-%m-%d %H:%M:%S')"
  git push origin main
done
