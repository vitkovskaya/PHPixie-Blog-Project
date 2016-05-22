<?php

namespace Vitkovskaya\Blog\HTTPProcessors;

use PHPixie\HTTP\Request;
use PHPixie\Template;

class Page extends BaseProcessor
{
    /**
     * About action
     * @param Request $request HTTP request
     * @return Template\Container
     */
    public function aboutAction($request)
    {
        $container = $this->template->get('blog:page/about');
        return $container;
    }
}
