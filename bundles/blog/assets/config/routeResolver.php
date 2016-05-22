<?php

return array(
    'type' => 'group',
    'resolvers' => array(
        'post' => array(
            'type' => 'pattern',
            'path' => '',
            'defaults' => array(
                'processor' => 'post',
                'action' => 'default'
            )
        ),
        'page' => array(
            'type' => 'pattern',
            'path' => 'page/<action>.html',
            'defaults' => array(
                'processor' => 'page'
            )
        )
    )
);
