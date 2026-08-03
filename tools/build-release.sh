#!/bin/bash

THEME="na-serenity"

git archive \
--format=zip \
--prefix="${THEME}/" \
--output="${THEME}.zip" \
HEAD -- . \
':(exclude).gitignore' \
':(exclude)composer.json' \
':(exclude)package.json' \
':(exclude)phpcs.xml.dist' \
':(exclude)tools'

echo "Build complete:"
echo "${THEME}.zip"
