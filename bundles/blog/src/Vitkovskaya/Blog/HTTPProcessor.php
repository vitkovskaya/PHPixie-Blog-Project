<?php

namespace Vitkovskaya\Blog;

class HTTPProcessor extends \PHPixie\DefaultBundle\Processor\HTTP\Builder
{
    /**
     * @var Builder
     */
    protected $builder;

    /**
     * Constructor
     * @param Builder $builder
     */
    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    /**
     * Build 'home' processor
     * @return HTTPProcessors\Post
     */
    protected function buildPostProcessor()
    {
        $components = $this->builder->components();
        
        return new HTTPProcessors\Post(
            $components->template()    
        );
    }

    /**
     * Build 'page' processor
     * @return HTTPProcessors\Page
     */
    protected function buildPageProcessor()
    {
        $components = $this->builder->components();

        return new HTTPProcessors\Page(
            $components->template()
        );
    }
}
