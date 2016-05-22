<?php

return array(
    'translator' => array(
        'basePath' => '/'
    ),
    'resolver' => array(
        'type' => 'group',
        'resolvers' => array(
            'blog' => array(
                'type' => 'prefix',
                'defaults' => array(
                    'bundle' => 'blog'
                ),
                'resolver' => array(
                    'type' => 'mount',
                    'name' => 'blog'
                )
            )
        )
    ),
    'exceptionResponse' => array(
        'template' => 'framework:http/exception'
    ),
    'notFoundResponse' => array(
        'template' => 'framework:http/notFound'
    )
);
