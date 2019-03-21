
************************
* Add to wp-config.php *
************************


define('DISABLE_WP_CRON', true);



************************
* Create cron manually *
* typically every 5min *
************************

wget -q -O - https://domain-name.com/wp-cron.php?doing_wp_cron >/dev/null 2>&1	
