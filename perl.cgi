#!/bin/sh

echo Content-Type: text/plain
echo
find `perl -e 'print "@INC"'` -name '*.pm'
