<?php
return array(
    'admin' => array(
        'repository' => 'app.admin',
        'providers'  => array(
            'session' => array(
                'type' => 'http.session'
            ),
            'password' => array(
                'type' => 'login.password',
                'persistProviders' => array('session')
            )
        )
    )
);
