<?php

namespace Vitkovskaya\Blog\HTTPProcessors;

use PHPixie\HTTP\Request;
use PHPixie\Template;

class BaseProcessor extends \PHPixie\DefaultBundle\Processor\HTTP\Actions
{
    /**
     * @var Template Template component
     */
    protected $template;

    /**
     * Constructor
     * @param Template $template
     */
    public function __construct($template)
    {
        $this->template = $template;
    }

    /**
     * @param Request $request
     * @param Template\Container $result
     * @return mixed
     */
    public function afterAction($request, $result)
    {
        $attributes = $request->attributes();

        $result->requestAttributes = $attributes;
        $result->processor = $attributes->get('processor');
        $result->action = $attributes->get('action');

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function process($request)
    {
        $result = parent::process($request);
        return $this->afterAction($request, $result);
    }
}
