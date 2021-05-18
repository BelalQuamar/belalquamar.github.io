
<?php
$link = "https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByDistrict?district_id=".$_GET["d"]."&date=".date('d-m-Y');
$comm = "curl --request GET '".$link."' --header 'Accept-Language: hi_IN' --header 'Accept: application/json' --header 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Saf$
echo shell_exec($comm);
