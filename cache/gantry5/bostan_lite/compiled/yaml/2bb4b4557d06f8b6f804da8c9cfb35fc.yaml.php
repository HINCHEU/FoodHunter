<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/hincheu/templates/bostan_lite/blueprints/styles/extension.yaml',
    'modified' => 1676023096,
    'data' => [
        'name' => 'Extension Styles',
        'description' => 'Extension styles for the theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => ''
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text Color',
                    'default' => '#868585'
                ]
            ]
        ]
    ]
];
