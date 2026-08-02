#!/bin/bash

THEME="na-outaouais-theme"

zip -r ${THEME}.zip . \
-x "*.git*" \
-x "node_modules/*" \
-x "*.DS_Store"

echo "Build complete:"
echo "${THEME}.zip"