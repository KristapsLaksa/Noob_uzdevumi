<?php

$haystack = ['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk'];

echo "found the needle at position ".array_search('needle',$haystack).PHP_EOL;