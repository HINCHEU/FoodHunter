<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\wamp64\\www\\hincheu/templates/bostan_lite/blueprints/styles/footer.yaml',
    'modified' => 1676023096,
    'data' => [
        'name' => 'Footer Styles',
        'description' => 'Footer styles for the theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#111111'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => ''
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text Color',
                    'default' => 'rgba(255, 255, 255, 0.5)'
                ],
                'link-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Link Color',
                    'default' => 'rgba(255, 255, 255, 0.5)'
                ],
                'link-hover-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Link Hover Color',
                    'default' => 'rgba(255, 255, 255, 0.5)'
                ]
            ]
        ]
    ]
];
