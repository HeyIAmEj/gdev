#!/bin/bash

# (grep -iP "127.0.0.1[\t]nomedabase.gdev" ./test && sed -i 's/127.0.0.1\tnomedabase.gdev/127.0.0.1\tnomeurl.gdev/g' ./test) || sed -i ':a;N;$! ba;s/.*\n127.0.0.1.*/&\n127.0.0.1\tnomeurl.gdev/' ./test
# cat /etc/hosts