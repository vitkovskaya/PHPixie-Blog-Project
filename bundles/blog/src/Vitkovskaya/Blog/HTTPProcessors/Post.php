<?php

namespace Vitkovskaya\Blog\HTTPProcessors;

use PHPixie\HTTP\Request;
use PHPixie\Template;

class Post extends BaseProcessor
{
    /**
     * Default action
     * @param Request $request HTTP request
     * @return Template\Container
     */
    public function defaultAction($request)
    {
        $container = $this->template->get('blog:greet');
        return $container;
    }
}
