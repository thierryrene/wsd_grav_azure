<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1458013616,
    'checksum' => '8dbc938eeac038bfb2d5ceb1372daed6',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1458009783
            ],
            'plugins/view' => [
                'file' => 'user/config/plugins/view.yaml',
                'modified' => 1458013350
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1458009737
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1456413550
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1458009783
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1458013610
            ],
            'themes/afterburner2' => [
                'file' => 'user/config/themes/afterburner2.yaml',
                'modified' => 1458010395
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1456413550
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1456413550
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1456413550
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1456413550
            ]
        ],
        'user/plugins' => [
            'plugins/view' => [
                'file' => 'user/plugins/view/view.yaml',
                'modified' => 1458013344
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1456413550
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1456413550
            ],
            'plugins/tidyhtml' => [
                'file' => 'user/plugins/tidyhtml/tidyhtml.yaml',
                'modified' => 1458013367
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1456413550
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1456413550
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1456413550
            ],
            'plugins/embed' => [
                'file' => 'user/plugins/embed/embed.yaml',
                'modified' => 1458013467
            ],
            'plugins/aboutme' => [
                'file' => 'user/plugins/aboutme/aboutme.yaml',
                'modified' => 1458010341
            ],
            'plugins/shortcode-core' => [
                'file' => 'user/plugins/shortcode-core/shortcode-core.yaml',
                'modified' => 1458010358
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1456413550
            ],
            'plugins/assets' => [
                'file' => 'user/plugins/assets/assets.yaml',
                'modified' => 1458010329
            ],
            'plugins/textformatter' => [
                'file' => 'user/plugins/textformatter/textformatter.yaml',
                'modified' => 1458013438
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'view' => [
                'enabled' => true
            ],
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'theme' => 'grav',
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'show_github_msg' => true,
                'google_fonts' => true,
                'enable_auto_updates_check' => true,
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => false,
                'route_register' => false,
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'redirect' => NULL,
                'parent_acl' => false,
                'user_registration' => [
                    'enabled' => true,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'access',
                        6 => 'state'
                    ],
                    'additional_params' => [
                        'access' => 'site.login'
                    ],
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => true,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ],
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 1800,
                    'name' => 'grav-rememberme'
                ],
                'oauth' => [
                    'enabled' => false,
                    'user' => [
                        'autocreate' => false,
                        'access' => [
                            'site' => [
                                'login' => true
                            ]
                        ]
                    ],
                    'providers' => [
                        'Facebook' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'Google' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'GitHub' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'Twitter' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ]
                    ]
                ]
            ],
            'tidyhtml' => [
                'enabled' => true,
                'hide_comments' => true,
                'indent' => true,
                'wrap' => 0,
                'indent_spaces' => 4,
                'blocklevel_tags' => [
                    0 => 'article',
                    1 => 'header',
                    2 => 'aside',
                    3 => 'audio',
                    4 => 'bdi',
                    5 => 'canvas',
                    6 => 'details',
                    7 => 'dialog',
                    8 => 'figcaption',
                    9 => 'figure',
                    10 => 'footer',
                    11 => 'hgroup',
                    12 => 'main',
                    13 => 'menu',
                    14 => 'menuitem',
                    15 => 'nav',
                    16 => 'section',
                    17 => 'source',
                    18 => 'summary',
                    19 => 'template',
                    20 => 'track',
                    21 => 'video'
                ],
                'empty_tags' => [
                    0 => 'command',
                    1 => 'embed',
                    2 => 'keygen',
                    3 => 'source',
                    4 => 'track',
                    5 => 'wbr'
                ],
                'inline_tags' => [
                    0 => 'audio',
                    1 => 'command',
                    2 => 'datalist',
                    3 => 'embed',
                    4 => 'keygen',
                    5 => 'mark',
                    6 => 'menuitem',
                    7 => 'meter',
                    8 => 'output',
                    9 => 'progress',
                    10 => 'source',
                    11 => 'time',
                    12 => 'video',
                    13 => 'wbr',
                    14 => 'data'
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html'
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'form' => [
                'enabled' => true,
                'files' => [
                    'multiple' => false,
                    'destination' => '@self',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'embed' => [
                'enabled' => true,
                'oembed' => [
                    'endpoint' => 'http://open.iframe.ly/api/oembed'
                ]
            ],
            'aboutme' => [
                'enabled' => true,
                'built_in_css' => true,
                'name' => 'Santa Claus',
                'title' => 'Present Giver',
                'description' => 'Santa Claus, Saint Nicholas, Saint Nick, Father Christmas, Kris Kringle, Santy, or simply Santa is a figure with legendary, historical and folkloric origins who, in many Western cultures, is said to bring gifts to the homes of good children on 24 December, the night before Christmas Day. The modern figure of Santa Claus is derived from the British figure of Father Christmas, the Dutch figure of Sinterklaas, and Saint Nicholas, the historical Greek bishop and gift-giver of Myra. During the Christianization of Germanic Europe, this figure may also have absorbed elements of the god Odin, who was associated with the Germanic pagan midwinter event of Yule and led the Wild Hunt, a ghostly procession through the sky',
                'picture_src' => 'user/plugins/aboutme/assets/avatars/santa.jpg',
                'gravatar' => [
                    'enabled' => false,
                    'email' => 'example@test.com',
                    'size' => 100
                ],
                'social_pages' => [
                    'enabled' => true,
                    'use_font_awesome' => false,
                    'pages' => [
                        'facebook' => [
                            'icon' => 'facebook-official',
                            'title' => 'Facebook',
                            'position' => 1
                        ],
                        'twitter' => [
                            'icon' => 'twitter',
                            'title' => 'Twitter',
                            'position' => 2
                        ],
                        'google_plus' => [
                            'icon' => 'google-plus-square',
                            'title' => 'Google+',
                            'position' => 3
                        ],
                        'github' => [
                            'icon' => 'github',
                            'title' => 'GitHub',
                            'position' => 4
                        ],
                        'linkedin' => [
                            'icon' => 'linkedin-square',
                            'title' => 'LinkedIn',
                            'position' => 5
                        ],
                        'instagram' => [
                            'icon' => 'instagram',
                            'title' => 'Instagram',
                            'position' => 6
                        ]
                    ]
                ]
            ],
            'shortcode-core' => [
                'enabled' => true,
                'active' => true,
                'active_admin' => true,
                'parser' => 'wordpress',
                'load_fontawesome' => false
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'assets' => [
                'enabled' => true
            ],
            'textformatter' => [
                'enabled' => true,
                'process' => false,
                'autoemail' => true,
                'autoimage' => true,
                'autolink' => [
                    'enabled' => true,
                    'www' => false,
                    'schemes' => [
                        0 => 'http',
                        1 => 'https'
                    ]
                ],
                'bbcodes' => [
                    'enabled' => true,
                    'bbcodes' => [
                        0 => 'b',
                        1 => 'c',
                        2 => 'center',
                        3 => 'code',
                        4 => 'color',
                        5 => 'email',
                        6 => 'float',
                        7 => 'hr',
                        8 => 'i',
                        9 => 'img',
                        10 => 'list',
                        11 => '*',
                        12 => 'quote',
                        13 => 's',
                        14 => 'size',
                        15 => 'spoiler',
                        16 => 'u',
                        17 => 'url'
                    ],
                    'custom' => NULL
                ],
                'censor' => [
                    'enabled' => true,
                    'words' => NULL
                ],
                'emoji' => '',
                'emoticons' => [
                    'enabled' => true,
                    'path' => '',
                    'icons' => NULL
                ],
                'escaper' => [
                    'enabled' => true,
                    'escape_all' => false,
                    'regex' => ''
                ],
                'fancypants' => true,
                'html' => [
                    'comments' => true,
                    'entities' => true,
                    'elements' => [
                        'enabled' => true,
                        'allowed' => [
                            'safe' => [
                                'a' => 'href, *title',
                                'abbr' => '*title',
                                'b' => '',
                                'br' => '',
                                'code' => '',
                                'dd' => '',
                                'del' => '',
                                'div' => '*class',
                                'dl' => '',
                                'dt' => '',
                                'i' => '',
                                'img' => 'src, *alt, *height, *title, *width',
                                'ins' => '',
                                'li' => '',
                                'ol' => '',
                                'pre' => '',
                                'rb' => '',
                                'rp' => '',
                                'rt' => '',
                                'rtc' => '',
                                'ruby' => '',
                                'span' => '*class',
                                'strong' => '',
                                'sub' => '',
                                'sup' => '',
                                'table' => '',
                                'tbody' => '',
                                'td' => '*colspan, *rowspan',
                                'tfoot' => '',
                                'th' => '*colspan, *rowspan, *scope',
                                'thead' => '',
                                'tr' => '',
                                'u' => '',
                                'ul' => ''
                            ],
                            'unsafe' => NULL
                        ]
                    ]
                ],
                'keywords' => [
                    'enabled' => true,
                    'case_sensitive' => true,
                    'template' => '',
                    'keywords' => NULL
                ],
                'mediaembed' => [
                    'enabled' => true,
                    'create_individiual_bbcodes' => true,
                    'sites' => [
                        0 => 'dailymotion',
                        1 => 'facebook',
                        2 => 'flickr',
                        3 => 'imgur',
                        4 => 'instagram',
                        5 => 'slideshare',
                        6 => 'soundcloud',
                        7 => 'spotify',
                        8 => 'tumblr',
                        9 => 'twitch',
                        10 => 'twitter',
                        11 => 'vimeo',
                        12 => 'vine',
                        13 => 'youtube'
                    ]
                ],
                'preg' => [
                    'enabled' => true,
                    'replace' => NULL,
                    'match' => NULL
                ]
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpe' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'aiff' => [
                'type' => 'audio',
                'mime' => 'audio/aiff'
            ],
            'aif' => [
                'type' => 'audio',
                'mime' => 'audio/aif'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'xml' => [
                'type' => 'file',
                'thumb' => 'media/thumb-xml.png',
                'mime' => 'application/xml'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'docx' => [
                'type' => 'file',
                'mime' => 'application/msword'
            ],
            'xls' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlm' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xld' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xla' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlc' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlw' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xll' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'ppt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'pps' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'rtf' => [
                'type' => 'file',
                'mime' => 'application/rtf'
            ],
            'bmp' => [
                'type' => 'file',
                'mime' => 'image/bmp'
            ],
            'tiff' => [
                'type' => 'file',
                'mime' => 'image/tiff'
            ],
            'mpeg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpe' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'avi' => [
                'type' => 'file',
                'mime' => 'video/msvideo'
            ],
            'wmv' => [
                'type' => 'file',
                'mime' => 'video/x-ms-wmv'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'htm' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            '7z' => [
                'type' => 'file',
                'thumb' => 'media/thumb-7zip.png',
                'mime' => 'application/x-7z-compressed'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ],
            'tar' => [
                'type' => 'file',
                'mime' => 'application/x-tar'
            ],
            'css' => [
                'type' => 'file',
                'thumb' => 'media/thumb-css.png',
                'mime' => 'text/css'
            ],
            'js' => [
                'type' => 'file',
                'thumb' => 'media/thumb-js.png',
                'mime' => 'application/javascript'
            ],
            'json' => [
                'type' => 'file',
                'thumb' => 'media/thumb-json.png',
                'mime' => 'application/json'
            ]
        ],
        'site' => [
            'title' => 'Grav',
            'author' => [
                'name' => 'Joe Bloggs',
                'email' => 'joe@test.com'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'proxy_url' => NULL,
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'afterburner2',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '301',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'markdown_extra' => false
            ],
            'cache' => [
                'enabled' => false,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => false
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => true,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true
            ]
        ],
        'security' => [
            'salt' => 'cdGCrpOUnkt7sv'
        ],
        'themes' => [
            'afterburner2' => [
                'dropdown' => [
                    'enabled' => false
                ]
            ]
        ]
    ]
];
