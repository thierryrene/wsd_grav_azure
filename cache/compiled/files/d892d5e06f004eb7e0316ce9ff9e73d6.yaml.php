<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/textformatter/languages.yaml',
    'modified' => 1458013438,
    'data' => [
        'de' => [
            'PLUGINS' => [
                'TEXTFORMATTER' => [
                    'GLOBAL_CONFIG' => 'Globale Einstellungen',
                    'DEFAULT_CONFIG' => 'Standardeinstellungen für TextFormatter',
                    'SPECIFIC_CONFIG' => 'Globale und seitenspezifische Einstellungen',
                    'PLUGIN_STATUS' => 'Plugin Status',
                    'TEXTFORMATTER' => 'TextFormatter',
                    'PROCESS' => 'TextFormatter anwenden',
                    'STATUS' => 'Status',
                    'AUTOEMAIL' => [
                        'SECTION' => 'Auto E-Mail',
                        'SECTION_HELP' => 'Wandelt E-Mail-Adressen in anklickbare \'mailto:\' Links um.'
                    ],
                    'AUTOIMAGE' => [
                        'SECTION' => 'Auto-Bild',
                        'SECTION_HELP' => 'Erkennt Links auf Bilder und bettet diese ins Dokument ein.'
                    ],
                    'AUTOLINK' => [
                        'SECTION' => 'Auto-Links',
                        'SECTION_HELP' => 'Wandelt URL-Text in anklickbare Links um.',
                        'WWW' => 'Verlinkung (WWW)',
                        'WWW_HELP' => 'Verlinke auch Links, die mit \'www.\' beginnen',
                        'SCHEMES' => 'Erlaubte Protokolle',
                        'SCHEMES_HELP' => 'Liste von erlaubten Protokollen'
                    ],
                    'BBCODES' => [
                        'SECTION' => 'BBCodes',
                        'SECTION_HELP' => 'Erlaubt die Verwendung von BBCodes.',
                        'BBCODES' => 'BBCodes',
                        'BBCODES_HELP' => 'Füge vordefinierte BBCodes aus der Paketverwaltung hinzu (<a href=\'https://github.com/s9e/TextFormatter/blob/master/src/Plugins/BBCodes/Configurator/repository.xml\'>Dokumentation</a>)',
                        'CUSTOM' => [
                            'LABEL' => 'Benutzerdefinierte BBCodes',
                            'HELP' => 'Füge eigene BBCodes mit Tokens, Regeln und einem Template hinzu (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/BBCodes/Custom_BBCode_syntax/\'>Dokumentation</a>)',
                            'PLACEHOLDER_KEY' => '<BBCode>',
                            'PLACEHOLDER_VALUE' => '<Template>'
                        ]
                    ],
                    'CENSOR' => [
                        'SECTION' => 'Zensur',
                        'SECTION_HELP' => 'Zenziert den Text basierend auf einer anpassbaren Liste von Wörtern.',
                        'WORDS' => [
                            'LABEL' => 'Zenzierte Wörter',
                            'HELP' => 'Wörter, die zensiert werden sollen. Aktzeptiert \'*\' als auch \'?\' als Platzhalter (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/Censor/Synopsis/\'>Dokumentation</a>)',
                            'PLACEHOLDER_KEY' => '<Wort>',
                            'PLACEHOLDER_VALUE' => '<Zensierung>'
                        ]
                    ],
                    'EMOJI' => [
                        'SECTION' => 'Emoji',
                        'SECTION_HELP' => 'Stelle und ersetzte Unicode Zeichen oder ASCII-Akronyme durch einen standartisierten Satz von Piktogrammen dar. Das Emoji Plugin bindet die Piktogramme als Bilder ein und greift dazu auf die freien Bibliotheken <a href=\'http://twitter.github.io/twemoji/\'>Twemoji</a> und <a href=\'http://emojione.com/\'>Emoji One</a>.',
                        'LABEL' => 'Emoji',
                        'DEFAULT' => '- Kein Emoji Paket ausgewählt -',
                        'TWEMOJI' => 'Twemoji',
                        'EMOJIONE' => 'EmojiOne'
                    ],
                    'ESCAPER' => [
                        'SECTION' => 'Maskierung',
                        'SECTION_HELP' => 'Definiert den Backslash `\\` als Maskierungszeichen.',
                        'ESCAPE_ALL' => 'Maskiere Unicode-Zeichen',
                        'ESCAPE_ALL_HELP' => 'Maskiere Unicode-Zeichen (nur sinnvoll in spezifischen Situationen)',
                        'REGEX' => 'Maskierung basierend auf regulären Ausdruck',
                        'REGEX_HELP' => 'Maskiere Zeichen basierend auf regulären Ausdruck (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/Escaper/Synopsis/#how-to-escape-only-certain-characters\'>Dokumentation</a>)'
                    ],
                    'EMOTICONS' => [
                        'SECTION' => 'Emoticons',
                        'SECTION_HELP' => 'Erlaubt einfache Ersetzungen wie zur Einbindung von Emoticons. Bei der Ersetzung wird zwischen Groß- und Kleinbuchstaben unterschieden. <b>Bitte stelle hierbei sicher, dass du bereits ein Emotiocon-Paket z.B. von <a href=\'https://github.com/search?q=user%3ASommerregen+grav-data-smileys\' target=\'_blank\'>GitHub</a> heruntergeladen und installiert hast.</b>',
                        'PATH' => 'Pfad zum Emoticons-Paket',
                        'PATH_HELP' => 'Erlaubt sind absolute, relative Pfade oder die mit Grav zur Verfügung stehenden Dateistreams',
                        'LABEL' => 'Emoticons',
                        'HELP' => 'Liste von Emoticons',
                        'PLACEHOLDER_KEY' => '<emoticon>',
                        'PLACEHOLDER_VALUE' => '<Dateiname.Erweiterung>'
                    ],
                    'FANCYPANTS' => [
                        'SECTION' => 'FancyPants',
                        'SECTION_HELP' => 'Verbessert das Schriftbild (Typographie) durch Verwendung von Unicode-Zeichen.'
                    ],
                    'HTML' => [
                        'SECTION' => 'HTML Kommentare & Entitäten',
                        'SECTION_HELP' => 'Erlaubt die Verwendung von HTML-Kommentaren und maskiert HTML-Entitäten.',
                        'COMMENTS' => 'Erlaube HTML-Kommentare',
                        'COMMENTS_HELP' => 'Erlaube HTML-Kommentare',
                        'ENTITIES' => 'Erlaube HTML-Entitäten',
                        'ENTITIES_HELP' => 'Erlaube HTML-Entitäten'
                    ],
                    'HTML_ELEMENTS' => [
                        'SECTION' => 'HTML-Elemente',
                        'SECTION_HELP' => 'Erlaube HTML-Elemente basierend auf einer Whitelist. Standardmäßig sind keine HTML-Elemente. Für jedes HTML-Element kann eine beliebige Anzahl von HTML-Attributen freigeben werden. Gefährliche HTML-Elemente wie <code>&lt;script&gt;</code> und gefählriche Attribute wie <code>onclick</code> müssen separat erlaubt werden.',
                        'LABEL' => 'Whitelist von HTML-Elemente',
                        'HELP' => 'Whitelist von erlaubten HTML-Elementen',
                        'PLACEHOLDER_KEY' => '<Element>',
                        'PLACEHOLDER_VALUE' => '<Attribute>',
                        'SAFE_LABEL' => 'Whitelist von ungefährlichen HTML-Elementen',
                        'SAFE_HELP' => 'Liste von ungefährlichen HTML-Elementen. Attribute werden durch Komma getrennt. Optioniale Attribute werden mit voranstehendem Stern \'*\' gekennzeichnet (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/HTMLElements/Synopsis/\'>Dokumentation</a>)',
                        'UNSAFE_LABEL' => 'Whitelist von gefährlichen HTML-Elementen',
                        'UNSAFE_HELP' => 'Liste von gefährlichen HTML-Elementen. Attribute werden durch Komma getrennt. Optioniale Attribute werden mit voranstehendem Stern \'*\' gekennzeichnet  (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/HTMLElements/Synopsis/\'>Dokumentation</a>)'
                    ],
                    'KEYWORDS' => [
                        'SECTION' => 'Schlüsselwörter',
                        'SECTION_HELP' => 'Erkennt Schlüsselwörter im Text und erlaubt diese z.B. als Links oder Widgets darzustellen oder als Popup aus dem Text hervorzuheben.',
                        'CASE_SENSITIVE' => 'Groß- und Kleinschreibung',
                        'CASE_SENSITIVE_HELP' => 'Standardmäßig werden bei Schlüsselwörter zwischen Groß- und Kleinbuchstaben unterschieden',
                        'TEMPLATE' => 'Template',
                        'TEMPLATE_HELP' => 'Template zur Darstellung von Schlüsselwörtern (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/Keywords/Synopsis/\'>Dokumentation</a>)',
                        'KEYWORDS' => [
                            'LABEL' => 'Schlüsselwörter',
                            'HELP' => 'Eine mit komma-getrennte Liste aus Schlüsselwörtern'
                        ]
                    ],
                    'MEDIAEMBED' => [
                        'SECTION' => 'Mediaembed',
                        'SECTION_HELP' => 'Erlaubt dem Benutzer mediale Inhalte durch den <code>[media]</code> BBCode, durch seitenspezifische BBCodes wie <code>[youtube]</code> oder durch einen Link einzubetten.',
                        'BBCODES' => 'MediaEmbed BBCodes',
                        'BBCODES_HELP' => 'Falls aktiviert wird für jede Seite ein eigener BBCode wie [youtube], [vimeo] etc. zur Einbettung zur Verfügung gestellt',
                        'SITES' => [
                            'LABEL' => 'Untersützte Seiten',
                            'HELP' => 'Füge weitere Seiten hinzu, die du erlauben möchtest (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/MediaEmbed/Sites/\'>Dokumentation</a>)'
                        ]
                    ],
                    'PREG' => [
                        'SECTION' => 'Reguläre Ausdrücke',
                        'SECTION_HELP' => 'Führt auf regulären Ausdrücken basierende Ersetzungen durch.',
                        'REPLACE' => [
                            'LABEL' => 'Ersetzungen',
                            'HELP' => 'Auf regulären Ausdrücken basierende Ersetzung. Werte in Klammern (\'Capture groups\') stehen als Attribute im XSL-Stylesheet zur Verfügung (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/Preg/Synopsis/\'>Dokumentation</a>).',
                            'PLACEHOLDER_KEY' => '<Regulärer Ausdruck>',
                            'PLACEHOLDER_VALUE' => '<Ersetzung>'
                        ],
                        'MATCH' => [
                            'LABEL' => 'Übereinstimmungen',
                            'HELP' => 'Sucht und ordnet jede Übereinstimmung einem bestimmten Tag zu (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/Preg/Synopsis/#using-match\'>Dokumentation</a>).',
                            'PLACEHOLDER_KEY' => '<Regulärer Ausdruck>',
                            'PLACEHOLDER_VALUE' => '<Tag-Name>'
                        ]
                    ]
                ]
            ]
        ],
        'en' => [
            'PLUGINS' => [
                'TEXTFORMATTER' => [
                    'GLOBAL_CONFIG' => 'Global plugin configurations',
                    'DEFAULT_CONFIG' => 'Default values for TextFormatter configuration',
                    'SPECIFIC_CONFIG' => 'Global and page specific configurations',
                    'PLUGIN_STATUS' => 'Plugin status',
                    'TEXTFORMATTER' => 'TextFormatter',
                    'PROCESS' => 'Process',
                    'STATUS' => 'Status',
                    'AUTOEMAIL' => [
                        'SECTION' => 'Automail',
                        'SECTION_HELP' => 'Converts plain-text emails into clickable \'mailto:\' links.'
                    ],
                    'AUTOIMAGE' => [
                        'SECTION' => 'Autoimage',
                        'SECTION_HELP' => 'Converts plain-text image URLs into actual images.'
                    ],
                    'AUTOLINK' => [
                        'SECTION' => 'Autolink',
                        'SECTION_HELP' => 'Converts plain-text URLs into clickable links.',
                        'WWW' => 'Autolink WWW',
                        'WWW_HELP' => 'Automatically link any hostname that starts with \'www.\'',
                        'SCHEMES' => 'Allowed schemes',
                        'SCHEMES_HELP' => 'List of allowed schemes'
                    ],
                    'BBCODES' => [
                        'SECTION' => 'BBCodes',
                        'SECTION_HELP' => 'Handle a very flexible flavour of the BBCode syntax.',
                        'BBCODES' => 'BBCodes',
                        'BBCODES_HELP' => 'Add BBCodes from repository (<a href=\'https://github.com/s9e/TextFormatter/blob/master/src/Plugins/BBCodes/Configurator/repository.xml\'>documentation</a>)',
                        'CUSTOM' => [
                            'LABEL' => 'Custom BBCodes',
                            'HELP' => 'Add your own BBCodes using tokens, rules and a custom template (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/BBCodes/Custom_BBCode_syntax/\'>documentation</a>)',
                            'PLACEHOLDER_KEY' => '<bbcode>',
                            'PLACEHOLDER_VALUE' => '<template>'
                        ]
                    ],
                    'CENSOR' => [
                        'SECTION' => 'Censors',
                        'SECTION_HELP' => 'Censors text based on a configurable list of words.',
                        'WORDS' => [
                            'LABEL' => 'Censored words',
                            'HELP' => 'Cesors words. Accepts \'*\' and \'?\' as placeholders (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/Censor/Synopsis/\'>documentation</a>)',
                            'PLACEHOLDER_KEY' => '<word>',
                            'PLACEHOLDER_VALUE' => '<replacement>'
                        ]
                    ],
                    'EMOJI' => [
                        'SECTION' => 'Emoji',
                        'SECTION_HELP' => 'Render standardized set of pictographs. They exists as Unicode characters and ASCII shortcodes. The Emoji plugin renders both as images, using the free sets from <a href=\'http://twitter.github.io/twemoji/\'>Twemoji</a> or <a href=\'http://emojione.com/\'>Emoji One</a>.',
                        'LABEL' => 'Emoji',
                        'DEFAULT' => '- No emoji set selected -',
                        'TWEMOJI' => 'Twemoji',
                        'EMOJIONE' => 'EmojiOne'
                    ],
                    'ESCAPER' => [
                        'SECTION' => 'Escaper',
                        'SECTION_HELP' => 'Defines the backslash character \'\\\' as an escape character.',
                        'ESCAPE_ALL' => 'Escape any Unicode character',
                        'ESCAPE_ALL_HELP' => 'Escape any Unicode character (only suitable in some specific situations)',
                        'REGEX' => 'Escape according to regular expression',
                        'REGEX_HELP' => 'Escape according to regular expression (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/Escaper/Synopsis/#how-to-escape-only-certain-characters\'>documentation</a>)'
                    ],
                    'EMOTICONS' => [
                        'SECTION' => 'Emoticons',
                        'SECTION_HELP' => 'Performs simple replacements, best suited for handling emoticons. Matching is case-sensitive. <b>Please make sure you installed e.g one of the emoticons sets from <a href=\'https://github.com/search?q=user%3ASommerregen+grav-data-smileys\' target=\'_blank\'>GitHub</a>.</b>',
                        'PATH' => 'Path to emoticons set',
                        'PATH_HELP' => 'You can use an absolute, relative path or any valid stream registered in Grav pointing to your emoticons set',
                        'LABEL' => 'Emoticons',
                        'HELP' => 'List of emoticons',
                        'PLACEHOLDER_KEY' => '<emoticon>',
                        'PLACEHOLDER_VALUE' => '<filename.ext>'
                    ],
                    'FANCYPANTS' => [
                        'SECTION' => 'FancyPants',
                        'SECTION_HELP' => 'Provide enhanced typography, aka \'fancy Unicode symbols\'.'
                    ],
                    'HTML' => [
                        'SECTION' => 'HTML Comments & Entities',
                        'SECTION_HELP' => 'Allows HTML comments to be used and escapes HTML entities.',
                        'COMMENTS' => 'Allow HTML comments',
                        'COMMENTS_HELP' => 'Allow HTML comments to be used',
                        'ENTITIES' => 'Allow HTML entities',
                        'ENTITIES_HELP' => 'Allow HTML entities to be used'
                    ],
                    'HTML_ELEMENTS' => [
                        'SECTION' => 'HTML Elements',
                        'SECTION_HELP' => 'Enables a whitelist of HTML elements to be used. By default, no HTML elements and no attributes are allowed. For each HTML element, a whitelist of attributes can be set. Unsafe elements such as <code>&lt;script&gt;</code> and unsafe attributes such as <code>onclick</code> must be set using a different method than safe elements and attributes.',
                        'LABEL' => 'Use whitelist of HTML elements',
                        'HELP' => 'Enables a whitelist of HTML elements to be used',
                        'PLACEHOLDER_KEY' => '<element>',
                        'PLACEHOLDER_VALUE' => '<attributes>',
                        'SAFE_LABEL' => 'Whitelist of safe HTML elements',
                        'SAFE_HELP' => 'List of safe HTML elements. Attributes are comma-separated. Optional attributes are denoted with a preceeding star \'*\' (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/HTMLElements/Synopsis/\'>documentation</a>)',
                        'UNSAFE_LABEL' => 'Whitelist of unsafe HTML elements',
                        'UNSAFE_HELP' => 'List of unsafe HTML elements. Attributes are comma-separated. Optional attributes are denoted with a preceeding star \'*\' (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/HTMLElements/Synopsis/\'>documentation</a>)'
                    ],
                    'KEYWORDS' => [
                        'SECTION' => 'Keywords',
                        'SECTION_HELP' => 'Serves to capture keywords in plain text and render them as a rich element of your choosing such as a link, a popup or a widget.',
                        'CASE_SENSITIVE' => 'Case-sensitive',
                        'CASE_SENSITIVE_HELP' => 'Keywords are case-sensitive by default',
                        'TEMPLATE' => 'Template',
                        'TEMPLATE_HELP' => 'Template to render keywords (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/Keywords/Synopsis/\'>documentation</a>)',
                        'KEYWORDS' => [
                            'LABEL' => 'Keywords',
                            'HELP' => 'Add a couple of comma-separated keywords'
                        ]
                    ],
                    'MEDIAEMBED' => [
                        'SECTION' => 'Mediaembed',
                        'SECTION_HELP' => 'Allow the user to embed content from allowed sites using a <code>[media]</code> BBCode, site-specific BBCodes such as <code>[youtube]</code>, or from simply posting a supported URL in plain text.',
                        'BBCODES' => 'MediaEmbed BBCodes',
                        'BBCODES_HELP' => 'If enabled it creates a BBCode for each site like [youtube], [vimeo] etc.',
                        'SITES' => [
                            'LABEL' => 'Sites',
                            'HELP' => 'Add the sites you want to support (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/MediaEmbed/Sites/\'>documentation</a>)'
                        ]
                    ],
                    'PREG' => [
                        'SECTION' => 'Preg',
                        'SECTION_HELP' => 'Performs generic, regexp-based replacements.',
                        'REPLACE' => [
                            'LABEL' => 'Replace',
                            'HELP' => 'Regexp-based replacements. The values in the named capturing subpatterns in the matching regexp are available as attributes in the XSL replacement (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/Preg/Synopsis/\'>documentation</a>).',
                            'PLACEHOLDER_KEY' => '<pattern>',
                            'PLACEHOLDER_VALUE' => '<replacement>'
                        ],
                        'MATCH' => [
                            'LABEL' => 'Match',
                            'HELP' => 'Match any text and assign it to a tag (<a href=\'http://s9etextformatter.readthedocs.org/Plugins/Preg/Synopsis/#using-match\'>documentation</a>).',
                            'PLACEHOLDER_KEY' => '<pattern>',
                            'PLACEHOLDER_VALUE' => '<tagname>'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
