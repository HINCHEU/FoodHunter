<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\wamp64\\www\\hincheu/templates/jl_finance_lite/particles/jltwitter.yaml',
    'modified' => 1676022657,
    'data' => [
        'name' => 'JL Twitter Timeline',
        'description' => 'Twitter Timeline',
        'type' => 'particle',
        'icon' => 'fa-bars',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                'name' => [
                    'type' => 'input.text',
                    'label' => 'Twitter Username',
                    'description' => 'Enter Twitter\'s name.',
                    'placeholder' => 'joomla'
                ],
                'height' => [
                    'type' => 'input.number',
                    'label' => 'Height',
                    'description' => 'Set a fixed height of the embedded widget.Leave blank to use auto'
                ],
                'limit' => [
                    'type' => 'input.number',
                    'label' => 'Limit',
                    'description' => 'Set number of Tweets displayed (will disable scroll and height if set).'
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Twitter Timeline <strong>Version: 2.2.3</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/twitter-timeline-particle-documentation/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
