<?php 
return array (
  '_initiator' => 
  array (
    'type' => 'other',
    'url' => 'https://www.instagram.com/accounts/onetap/?next=%2F',
  ),
  '_priority' => 'VeryLow',
  '_resourceType' => 'script',
  'cache' => 
  array (
  ),
  'request' => 
  array (
    'method' => 'GET',
    'url' => 'https://www.instagram.com/www-service-worker.js?s=push&__d=www&enableAddToHomeScreen=false',
    'httpVersion' => 'h3',
    'headers' => 
    array (
      0 => 
      array (
        'name' => 'Accept',
        'value' => '*/*',
      ),
      1 => 
      array (
        'name' => 'Service-Worker',
        'value' => 'script',
      ),
    ),
    'queryString' => 
    array (
      0 => 
      array (
        'name' => 's',
        'value' => 'push',
      ),
      1 => 
      array (
        'name' => '__d',
        'value' => 'www',
      ),
      2 => 
      array (
        'name' => 'enableAddToHomeScreen',
        'value' => 'false',
      ),
    ),
    'cookies' => 
    array (
    ),
    'headersSize' => -1,
    'bodySize' => 0,
  ),
  'response' => 
  array (
    'status' => 200,
    'statusText' => '',
    'httpVersion' => 'h3',
    'headers' => 
    array (
      0 => 
      array (
        'name' => 'content-security-policy',
        'value' => 'default-src *.facebook.com *.fbcdn.net *.instagram.com data: blob:;script-src *.teststagram.com *.instagram.com static.cdninstagram.com *.google-analytics.com https://translate.google.com https://apis.google.com https://accounts.google.com *.facebook.com *.fbcdn.net *.facebook.net 127.0.0.1:* \'unsafe-inline\' \'unsafe-eval\' blob: data: \'self\';style-src *.teststagram.com *.instagram.com static.cdninstagram.com data: blob: \'unsafe-inline\' *.fbcdn.net *.facebook.com;connect-src *.teststagram.com *.instagram.com wss://edge-chat.instagram.com connect.facebook.net *.facebook.com facebook.com *.fbcdn.net *.facebook.net wss://*.facebook.com:* ws://localhost:* blob: *.cdninstagram.com wss://*.instagram.com:* \'self\' cdn.fbsbx.com;font-src *.teststagram.com *.instagram.com static.cdninstagram.com data: *.fbcdn.net *.intern.facebook.com *.facebook.com fonts.gstatic.com;img-src *.teststagram.com *.instagram.com *.facebook.com *.fbcdn.net data: *.igsonar.com *.cdninstagram.com *.google-analytics.com *.whatsapp.net blob: www.gstatic.com *.fbsbx.com android-webview-video-poster: *.oculuscdn.com www.googleadservices.com *.doubleclick.net *.google.com *.google.co.uk *.giphy.com;media-src *.facebook.com *.fbcdn.net *.instagram.com *.cdninstagram.com cdn.fbsbx.com data: blob: https://*.giphy.com;frame-src *.instagram.com *.facebook.com *.fbsbx.com fbsbx.com data: www.googleadservices.com *.doubleclick.net *.google.com *.google.co.uk;worker-src *.instagram.com/static_resources/webworker_v1/init_script/ *.instagram.com/static_resources/webworker/init_script/ *.instagram.com/static_resources/sharedworker/init_script/ *.instagram.com/www-service-worker.js;block-all-mixed-content;upgrade-insecure-requests;',
      ),
      1 => 
      array (
        'name' => 'content-encoding',
        'value' => 'zstd',
      ),
      2 => 
      array (
        'name' => 'x-content-type-options',
        'value' => 'nosniff',
      ),
      3 => 
      array (
        'name' => 'strict-transport-security',
        'value' => 'max-age=31536000; preload; includeSubDomains',
      ),
      4 => 
      array (
        'name' => 'date',
        'value' => 'Sat, 27 Apr 2024 15:00:22 GMT',
      ),
      5 => 
      array (
        'name' => 'document-policy',
        'value' => 'force-load-at-top',
      ),
      6 => 
      array (
        'name' => 'content-security-policy-report-only',
        'value' => 'default-src *.facebook.com *.fbcdn.net *.instagram.com data: blob:;script-src *.teststagram.com *.instagram.com static.cdninstagram.com *.google-analytics.com https://translate.google.com https://apis.google.com https://accounts.google.com *.facebook.com *.fbcdn.net *.facebook.net \'unsafe-inline\' \'unsafe-eval\' blob: data: \'self\';style-src *.teststagram.com *.instagram.com static.cdninstagram.com data: blob: \'unsafe-inline\' *.fbcdn.net *.facebook.com;connect-src *.teststagram.com *.instagram.com wss://edge-chat.instagram.com connect.facebook.net *.facebook.com facebook.com *.fbcdn.net *.facebook.net wss://*.facebook.com:* ws://localhost:* blob: *.cdninstagram.com wss://*.instagram.com:* \'self\' cdn.fbsbx.com;font-src *.teststagram.com *.instagram.com static.cdninstagram.com data: *.fbcdn.net *.intern.facebook.com *.facebook.com fonts.gstatic.com;img-src *.teststagram.com *.instagram.com *.facebook.com *.fbcdn.net data: *.igsonar.com *.cdninstagram.com *.google-analytics.com blob: *.fbsbx.com android-webview-video-poster: *.giphy.com;media-src *.facebook.com *.fbcdn.net *.instagram.com *.cdninstagram.com cdn.fbsbx.com data: blob: https://*.giphy.com;frame-src *.instagram.com *.facebook.com *.fbsbx.com fbsbx.com data:;worker-src *.instagram.com/static_resources/webworker_v1/init_script/ *.instagram.com/static_resources/webworker/init_script/ *.instagram.com/static_resources/sharedworker/init_script/ *.instagram.com/www-service-worker.js;block-all-mixed-content;report-uri https://www.facebook.com/csp/reporting/?minimize=0;',
      ),
      7 => 
      array (
        'name' => 'cross-origin-resource-policy',
        'value' => 'cross-origin',
      ),
      8 => 
      array (
        'name' => 'alt-svc',
        'value' => 'h3=":443"; ma=86400',
      ),
      9 => 
      array (
        'name' => 'x-xss-protection',
        'value' => '0',
      ),
      10 => 
      array (
        'name' => 'reporting-endpoints',
        'value' => 'coop_report="https://www.facebook.com/browser_reporting/coop/?minimize=0", coep_report="https://www.facebook.com/browser_reporting/coep/?minimize=0", default="https://www.instagram.com/error/ig_web_error_reports/?device_level=unknown", permissions_policy="https://www.instagram.com/error/ig_web_error_reports/"',
      ),
      11 => 
      array (
        'name' => 'pragma',
        'value' => 'no-cache',
      ),
      12 => 
      array (
        'name' => 'x-fb-debug',
        'value' => 'DH7SAII48ngBH/LFfNfLCKa54s5qX2QF2Zy65xvvEgzfR1q9SYG/I1Fgyh+LhLnym7uMQhdf84aph3/5sMoVYA==',
      ),
      13 => 
      array (
        'name' => 'cross-origin-embedder-policy-report-only',
        'value' => 'require-corp;report-to="coep_report"',
      ),
      14 => 
      array (
        'name' => 'x-stack',
        'value' => 'www',
      ),
      15 => 
      array (
        'name' => 'cross-origin-opener-policy',
        'value' => 'same-origin-allow-popups;report-to="coop_report"',
      ),
      16 => 
      array (
        'name' => 'vary',
        'value' => 'Origin, Service-Worker, Accept-Encoding',
      ),
      17 => 
      array (
        'name' => 'report-to',
        'value' => '{"max_age":2592000,"endpoints":[{"url":"https:\\/\\/www.facebook.com\\/browser_reporting\\/coop\\/?minimize=0"}],"group":"coop_report","include_subdomains":true}, {"max_age":86400,"endpoints":[{"url":"https:\\/\\/www.facebook.com\\/browser_reporting\\/coep\\/?minimize=0"}],"group":"coep_report"}, {"max_age":259200,"endpoints":[{"url":"https:\\/\\/www.instagram.com\\/error\\/ig_web_error_reports\\/?device_level=unknown"}]}, {"max_age":21600,"endpoints":[{"url":"https:\\/\\/www.instagram.com\\/error\\/ig_web_error_reports\\/"}],"group":"permissions_policy"}',
      ),
      18 => 
      array (
        'name' => 'content-type',
        'value' => 'application/x-javascript; charset=utf-8',
      ),
      19 => 
      array (
        'name' => 'x-frame-options',
        'value' => 'DENY',
      ),
      20 => 
      array (
        'name' => 'origin-agent-cluster',
        'value' => '?0',
      ),
      21 => 
      array (
        'name' => 'cache-control',
        'value' => 'private, no-cache, no-store, must-revalidate',
      ),
      22 => 
      array (
        'name' => 'permissions-policy',
        'value' => 'accelerometer=(self), attribution-reporting=(), autoplay=(), bluetooth=(), camera=(self), ch-device-memory=(), ch-downlink=(), ch-dpr=(), ch-ect=(), ch-rtt=(), ch-save-data=(), ch-ua-arch=(), ch-ua-bitness=(), ch-viewport-height=(), ch-viewport-width=(), ch-width=(), clipboard-read=(), clipboard-write=(self), display-capture=(), encrypted-media=(), fullscreen=(self), gamepad=(), geolocation=(self), gyroscope=(self), hid=(), idle-detection=(), keyboard-map=(), local-fonts=(), magnetometer=(), microphone=(self), midi=(), otp-credentials=(), payment=(), picture-in-picture=(self), publickey-credentials-get=(), screen-wake-lock=(), serial=(), usb=(), window-management=(), xr-spatial-tracking=();report-to="permissions_policy"',
      ),
      23 => 
      array (
        'name' => 'priority',
        'value' => 'u=4,i',
      ),
      24 => 
      array (
        'name' => 'expires',
        'value' => 'Sat, 01 Jan 2000 00:00:00 GMT',
      ),
    ),
    'cookies' => 
    array (
    ),
    'content' => 
    array (
      'size' => 2384,
      'mimeType' => 'application/x-javascript',
    ),
    'redirectURL' => '',
    'headersSize' => -1,
    'bodySize' => -1,
    '_transferSize' => 135,
    '_error' => NULL,
  ),
  'serverIPAddress' => '157.240.227.174',
  'startedDateTime' => '2024-04-27T15:00:22.777Z',
  'time' => 922.6889999999912,
  'timings' => 
  array (
    'blocked' => -1,
    'dns' => -1,
    'ssl' => -1,
    'connect' => -1,
    'send' => 0,
    'wait' => 557.159999999385,
    'receive' => 365.5290000006062,
    '_blocked_queueing' => -1,
  ),
)