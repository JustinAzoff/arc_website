#!/bin/sh
for x in *.php; do
    [ -e /tmp/$x.html ] || grep -q header..location -i $x|| wget -c albanyrowingcenter.org/$x -O /tmp/$x.html;
done
for x in /tmp/*php.html;do
    validate  $x;
done

