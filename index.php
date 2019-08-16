<?php

echo file_get_contents(getenv("URL")."/v1/NoaaExt.json?user=".getenv("DID")."&pass=".getenv("PASSWORD")."&apiToken=".getenv("APITOKEN"));
