<?php

use Kirby\Toolkit\Str;

return [

  // General
  'debug' => false,
  'slugs' => 'de',

  // Hooks
  'hooks' => [
    'kirbytags:before' => function ($text, $data, $options) {
      $text = Str::replace($text, "(-)", "&shy;");
      return $text;
    },
  ],

  // Mail Settings
  // 'mail.from' => ['formular@weimarer-kabarett.de' => 'Website'],
  // 'mail.to' => 'info@weimarer-kabarett.de',

  // Thumb Settings
  'thumbs' => [
    'presets' => [
      'default' => ['quality' => 70],
    ],
    'srcsets' => [
      'default' => [
        '800w' => ['width' => 800],
        '1024w' => ['width' => 1024],
        '1440w' => ['width' => 1440],
        '2048w' => ['width' => 2048]
      ],
      'square' => [
        '2000w' => ['width' => 2000, 'height' => 2000, 'crop' => 'center'],
        '1500w' => ['width' => 1500, 'height' => 1500,'crop' => 'center'],
        '1000w' => ['width' => 1000, 'height' => 1000,'crop' => 'center'],
        '500w' => ['width' => 500, 'height' => 500,'crop' => 'center'],
      ],
    ]
  ],

  'omz13.xmlsitemap.includeUnlistedWhenSlugIs' => [ 'impressum', 'datenschutz' ],
  'omz13.xmlsitemap.excludeChildrenWhenTemplateIs' => [ 'news' ],
];
