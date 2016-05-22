<?php
/**
 * @var \PHPixie\Template\Renderer\Runtime $this
 * @var PHPixie\Slice\Type\ArrayData $requestAttributes
 * @var string $processor
 * @var string $action
 */

$this->layout('blog:html');
$isHome = $processor == 'post' && $action == 'default';
$isAbout = $processor == 'page' && $action == 'about';
?>
<div class="wrap">
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="blog-logo">
                        <a href="<?=$this->httpPath('blog.post')?>"><img src="/bundles/blog/web/img/logo.png" alt="logo"></a>
                    </div>
                    <div class="blog-title">PHPixie Blog Project</div>
                    <div class="blog-description">Have fun blogging!</div>
                </div>
                <div class="col-sm-6">
                    <ul class="blog-nav list-inline">
                        <li class="<?= $isHome ? 'active' : ''?>">
                            <a class="btn btn-link" href="<?=$this->httpPath('blog.post'); ?>">Blog</a>
                        </li>
                        <li class="<?= $isAbout ? 'active' : ''; ?>"><a class="btn btn-link" href="<?=$this->httpPath('blog.page', ['action' => 'about'])?>">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="site-middle">
        <div class="container">
            <?php $this->childContent();?>
        </div>
    </div>
</div>
