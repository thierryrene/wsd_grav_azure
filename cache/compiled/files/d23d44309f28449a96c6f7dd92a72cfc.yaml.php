<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/textformatter/blueprints.yaml',
    'modified' => 1458013438,
    'data' => [
        'name' => 'Text Formatter',
        'version' => '1.0.2',
        'description' => 'This plugin is a wrapper for [TextFormatter](https://github.com/s9e/TextFormatter), a library that supports BBCode, HTML and other markup via plugin. It handles emoticons, censors words, automatically embeds media and more.',
        'icon' => 'sticky-note',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-plugin-textformatter',
        'keywords' => [
            0 => 'text',
            1 => 'formatter',
            2 => 'filter',
            3 => 'bbcode',
            4 => 'emoticons',
            5 => 'media',
            6 => 'embed',
            7 => 'plugin'
        ],
        'docs' => 'https://github.com/sommerregen/grav-plugin-textformatter/blob/master/README.md',
        'bugs' => 'https://github.com/sommerregen/grav-plugin-textformatter/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'global' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.TEXTFORMATTER.GLOBAL_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.TEXTFORMATTER.PLUGIN_STATUS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'default' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.TEXTFORMATTER.DEFAULT_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'process' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.TEXTFORMATTER.PROCESS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'specific' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.TEXTFORMATTER.SPECIFIC_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'autoemail_section' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.AUTOEMAIL.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.AUTOEMAIL.SECTION_HELP',
                            'fields' => [
                                'autoemail' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'autoimage_section' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.AUTOIMAGE.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.AUTOIMAGE.SECTION_HELP',
                            'fields' => [
                                'autoimage' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'autolink' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.AUTOLINK.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.AUTOLINK.SECTION_HELP',
                            'fields' => [
                                'autolink.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'autolink.www' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.AUTOLINK.WWW',
                                    'help' => 'PLUGINS.TEXTFORMATTER.AUTOLINK.WWW_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'autolink.schemes' => [
                                    'type' => 'selectize',
                                    'label' => 'PLUGINS.TEXTFORMATTER.AUTOLINK.SCHEMES',
                                    'help' => 'PLUGINS.TEXTFORMATTER.AUTOLINK.SCHEMES_HELP',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ]
                            ]
                        ],
                        'bbcodes' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.BBCODES.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.BBCODES.SECTION_HELP',
                            'fields' => [
                                'bbcodes.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'bbcodes.bbcodes' => [
                                    'type' => 'selectize',
                                    'label' => 'PLUGINS.TEXTFORMATTER.BBCODES.BBCODES',
                                    'help' => 'PLUGINS.TEXTFORMATTER.BBCODES.BBCODES_HELP',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ],
                                'bbcodes.custom' => [
                                    'type' => 'array',
                                    'label' => 'PLUGINS.TEXTFORMATTER.BBCODES.CUSTOM.LABEL',
                                    'help' => 'PLUGINS.TEXTFORMATTER.BBCODES.CUSTOM.HELP',
                                    'placeholder_key' => 'PLUGINS.TEXTFORMATTER.BBCODES.CUSTOM.PLACEHOLDER_KEY',
                                    'placeholder_value' => 'PLUGINS.TEXTFORMATTER.BBCODES.CUSTOM.PLACEHOLDER_VALUE',
                                    'validate' => [
                                        'type' => 'array'
                                    ]
                                ]
                            ]
                        ],
                        'censor' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.CENSOR.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.CENSOR.SECTION_HELP',
                            'fields' => [
                                'censor.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'censor.words' => [
                                    'type' => 'array',
                                    'label' => 'PLUGINS.TEXTFORMATTER.CENSOR.WORDS.LABEL',
                                    'help' => 'PLUGINS.TEXTFORMATTER.CENSOR.WORDS.HELP',
                                    'placeholder_key' => 'PLUGINS.TEXTFORMATTER.CENSOR.WORDS.PLACEHOLDER_KEY',
                                    'placeholder_value' => 'PLUGINS.TEXTFORMATTER.CENSOR.WORDS.PLACEHOLDER_VALUE',
                                    'validate' => [
                                        'type' => 'array'
                                    ]
                                ]
                            ]
                        ],
                        'emoji_section' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.EMOJI.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.EMOJI.SECTION_HELP',
                            'fields' => [
                                'emoji' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'PLUGINS.TEXTFORMATTER.EMOJI.LABEL',
                                    'default' => '',
                                    'options' => [
                                        '' => 'PLUGINS.TEXTFORMATTER.EMOJI.DEFAULT',
                                        'twemoji' => 'PLUGINS.TEXTFORMATTER.EMOJI.TWEMOJI',
                                        'emojione' => 'PLUGINS.TEXTFORMATTER.EMOJI.EMOJIONE'
                                    ],
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ]
                            ]
                        ],
                        'emoticons' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.EMOTICONS.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.EMOTICONS.SECTION_HELP',
                            'fields' => [
                                'emoticons.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'emoticons.path' => [
                                    'type' => 'text',
                                    'label' => 'PLUGINS.TEXTFORMATTER.EMOTICONS.PATH',
                                    'help' => 'PLUGINS.TEXTFORMATTER.EMOTICONS.PATH_HELP',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'emoticons.icons' => [
                                    'type' => 'array',
                                    'label' => 'PLUGINS.TEXTFORMATTER.EMOTICONS.LABEL',
                                    'help' => 'PLUGINS.TEXTFORMATTER.EMOTICONS.HELP',
                                    'placeholder_key' => 'PLUGINS.TEXTFORMATTER.EMOTICONS.PLACEHOLDER_KEY',
                                    'placeholder_value' => 'PLUGINS.TEXTFORMATTER.EMOTICONS.PLACEHOLDER_VALUE',
                                    'validate' => [
                                        'type' => 'array'
                                    ]
                                ]
                            ]
                        ],
                        'escaper' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.ESCAPER.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.ESCAPER.SECTION_HELP',
                            'fields' => [
                                'escaper.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'escaper.escape_all' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.ESCAPER.ESCAPE_ALL',
                                    'help' => 'PLUGINS.TEXTFORMATTER.ESCAPER.ESCAPE_ALL_HELP',
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'escaper.regex' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGINS.TEXTFORMATTER.ESCAPER.REGEX',
                                    'help' => 'PLUGINS.TEXTFORMATTER.ESCAPER.REGEX_HELP',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ]
                            ]
                        ],
                        'fancypants_section' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.FANCYPANTS.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.FANCYPANTS.SECTION_HELP',
                            'fields' => [
                                'fancypants' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'html' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.HTML.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.HTML.SECTION_HELP',
                            'fields' => [
                                'html.comments' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.HTML.COMMENTS',
                                    'help' => 'PLUGINS.TEXTFORMATTER.HTML.COMMENTS_HELP',
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'html.entities' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.HTML.ENTITIES',
                                    'help' => 'PLUGINS.TEXTFORMATTER.HTML.ENTITIES_HELP',
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'html.elements' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.HTML_ELEMENTS.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.HTML_ELEMENTS.SECTION_HELP',
                            'fields' => [
                                'html.elements.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'html.elements.allowed.safe' => [
                                    'type' => 'array',
                                    'label' => 'PLUGINS.TEXTFORMATTER.HTML_ELEMENTS.SAFE_LABEL',
                                    'help' => 'PLUGINS.TEXTFORMATTER.HTML_ELEMENTS.SAFE_HELP',
                                    'placeholder_key' => 'PLUGINS.TEXTFORMATTER.HTML_ELEMENTS.PLACEHOLDER_KEY',
                                    'placeholder_value' => 'PLUGINS.TEXTFORMATTER.HTML_ELEMENTS.PLACEHOLDER_VALUE',
                                    'validate' => [
                                        'type' => 'array'
                                    ]
                                ],
                                'html.elements.allowed.unsafe' => [
                                    'type' => 'array',
                                    'label' => 'PLUGINS.TEXTFORMATTER.HTML_ELEMENTS.UNSAFE_LABEL',
                                    'help' => 'PLUGINS.TEXTFORMATTER.HTML_ELEMENTS.UNSAFE_HELP',
                                    'placeholder_key' => 'PLUGINS.TEXTFORMATTER.HTML_ELEMENTS.PLACEHOLDER_KEY',
                                    'placeholder_value' => 'PLUGINS.TEXTFORMATTER.HTML_ELEMENTS.PLACEHOLDER_VALUE',
                                    'validate' => [
                                        'type' => 'array'
                                    ]
                                ]
                            ]
                        ],
                        'keywords' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.KEYWORDS.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.KEYWORDS.SECTION_HELP',
                            'fields' => [
                                'keywords.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'keywords.case_sensitive' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.KEYWORDS.CASE_SENSITIVE',
                                    'help' => 'PLUGINS.TEXTFORMATTER.KEYWORDS.CASE_SENSITIVE_HELP',
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'keywords.template' => [
                                    'type' => 'textarea',
                                    'label' => 'PLUGINS.TEXTFORMATTER.KEYWORDS.TEMPLATE',
                                    'help' => 'PLUGINS.TEXTFORMATTER.KEYWORDS.TEMPLATE_HELP',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'keywords.keywords' => [
                                    'type' => 'selectize',
                                    'label' => 'PLUGINS.TEXTFORMATTER.KEYWORDS.KEYWORDS.LABEL',
                                    'help' => 'PLUGINS.TEXTFORMATTER.KEYWORDS.KEYWORDS.HELP',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ]
                            ]
                        ],
                        'mediaembed' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.MEDIAEMBED.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.MEDIAEMBED.SECTION_HELP',
                            'fields' => [
                                'mediaembed.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'mediaembed.create_individiual_bbcodes' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.MEDIAEMBED.BBCODES',
                                    'help' => 'PLUGINS.TEXTFORMATTER.MEDIAEMBED.BBCODES_HELP',
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'mediaembed.sites' => [
                                    'type' => 'selectize',
                                    'label' => 'PLUGINS.TEXTFORMATTER.MEDIAEMBED.SITES.LABEL',
                                    'help' => 'PLUGINS.TEXTFORMATTER.MEDIAEMBED.SITES.HELP',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ]
                            ]
                        ],
                        'preg' => [
                            'type' => 'section',
                            'title' => 'PLUGINS.TEXTFORMATTER.PREG.SECTION',
                            'text' => 'PLUGINS.TEXTFORMATTER.PREG.SECTION_HELP',
                            'fields' => [
                                'preg.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.TEXTFORMATTER.STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'preg.replace' => [
                                    'type' => 'array',
                                    'label' => 'PLUGINS.TEXTFORMATTER.PREG.REPLACE.LABEL',
                                    'help' => 'PLUGINS.TEXTFORMATTER.PREG.REPLACE.HELP',
                                    'placeholder_key' => 'PLUGINS.TEXTFORMATTER.PREG.REPLACE.PLACEHOLDER_KEY',
                                    'placeholder_value' => 'PLUGINS.TEXTFORMATTER.PREG.REPLACE.PLACEHOLDER_VALUE',
                                    'validate' => [
                                        'type' => 'array'
                                    ]
                                ],
                                'preg.match' => [
                                    'type' => 'array',
                                    'label' => 'PLUGINS.TEXTFORMATTER.PREG.MATCH.LABEL',
                                    'help' => 'PLUGINS.TEXTFORMATTER.PREG.MATCH.HELP',
                                    'placeholder_key' => 'PLUGINS.TEXTFORMATTER.PREG.MATCH.PLACEHOLDER_KEY',
                                    'placeholder_value' => 'PLUGINS.TEXTFORMATTER.PREG.MATCH.PLACEHOLDER_VALUE',
                                    'validate' => [
                                        'type' => 'array'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
