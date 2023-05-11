<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\wamp64\\www\\hincheu/templates/bostan_lite/particles/jlbacktotop.yaml',
    'modified' => 1676023097,
    'data' => [
        'name' => 'JL Back To Top',
        'description' => 'Show a scroll back to top button',
        'type' => 'atom',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                'title_label' => [
                    'type' => 'input.text',
                    'label' => 'Aria-label property',
                    'placeholder' => 'Back To Top'
                ],
                'sec_id' => [
                    'type' => 'input.text',
                    'label' => 'Section ID',
                    'placeholder' => '#your-section-id',
                    'description' => 'Scroll to top if no special section id is defined.'
                ],
                'icon' => [
                    'type' => 'input.icon',
                    'label' => 'Icon',
                    'description' => 'Pick an optional icon.'
                ],
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Color',
                    'description' => 'Customize the back to top background color.'
                ],
                'color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Icon Color',
                    'description' => 'Customize the back to top color.'
                ],
                'backgroundhover' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Hover',
                    'description' => 'Customize the back to top background on hover.'
                ],
                'icon_color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Icon Hover Color',
                    'description' => 'Customize the back to top icon color on hover.'
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Back To Top <strong>Version: 2.2.4</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/back-top-atom-documentation/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
