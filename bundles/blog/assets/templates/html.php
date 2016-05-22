<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?> — PHPixie Blog Project</title>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bundles/blog/web/css/style.css">
</head>
<body>
<?php $this->childContent(); ?>
<footer class="site-footer">
    <div class="container text-center">
        Powered by <a class="framework-link" target="_blank" href="//phpixie.com">PHPixie 3</a>
    </div>
</footer>
</body>
</html>