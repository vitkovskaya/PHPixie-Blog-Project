<?php

namespace Vitkovskaya;

/**
 * Default application bundle
 */
class Blog extends \PHPixie\DefaultBundle
{
    /**
     * Build bundle builder
     * @param \PHPixie\BundleFramework\Builder $frameworkBuilder
     * @return Blog\Builder
     */
    protected function buildBuilder($frameworkBuilder)
    {
        return new Blog\Builder($frameworkBuilder);
    }
}
