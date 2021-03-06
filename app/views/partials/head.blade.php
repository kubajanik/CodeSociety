<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#3dd07d">
    <link rel="icon" href="/favicon.ico">
    <title>CodeSociety</title>

    @if (getenv('PHP_ENV') == 'production')
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139693261-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-139693261-1');
        </script>
    @endif

    {{ includeMainStyles() }}

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.2.2/quill.snow.css">
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.core.css">
    <link rel="stylesheet" href="/public/css/admin/article/form.css">
    <link rel="stylesheet" href="/public/css/admin/article/file-picker.css">
    <link rel="stylesheet" href="/public/css/admin/article/buttons.css">

    {{ includeMainScripts() }}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/highlight.min.js"></script>
    <script src="https://cdn.quilljs.com/1.2.2/quill.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="/public/js/admin/article/file-picker.js"></script>

</head>
<body>
    @include('partials/header')