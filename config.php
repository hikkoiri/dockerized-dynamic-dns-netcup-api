<?php
// Enter your netcup customer number here
define('CUSTOMERNR', getenv('CUSTOMERNR'));

//Enter your API-Key and -Password here - you can generate them in your CCP at https://ccp.netcup.net
define('APIKEY', getenv('APIKEY'));
define('APIPASSWORD',getenv('APIPASSWORD'));

// Enter Domain which should be used for dynamic DNS
define('DOMAIN', getenv('DOMAIN'));
//Enter subdomain to be used for dynamic DNS, alternatively '@' for domain root or '*' for wildcard. If the record doesn't exist, the script will create it.
define('HOST', getenv('HOST'));

//If set to true, the script will check for your public IPv6 address too and add it as an AAAA-Record / change an existing AAAA-Record for the host.
//Activate this only if you have IPv6 connectivity, or you *WILL* get errors.
define('USE_IPV6', getenv('USE_IPV6'));

//If set to true, this will change TTL to 300 seconds on every run if necessary.
define('CHANGE_TTL', getenv('CHANGE_TTL'));

// Use netcup DNS REST-API
define('APIURL', getenv('APIURL'));
