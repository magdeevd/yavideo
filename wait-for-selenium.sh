#!/bin/bash
# wait-for-selenium.sh

set -e

cmd="$@"

while ! curl -sSL "http://chrome:4444/wd/hub/status" 2>&1 \
        | grep '\"ready\": true' > /dev/null; do
    echo 'Waiting for the Selenium Server'
    sleep 1
done

>&2 echo "Selenium Server is up - executing tests"
exec $cmd
