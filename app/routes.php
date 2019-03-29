<?php

$router->get('articles', 'ArticlesController@articlesByPage');
$router->get('articles/page/{page}', 'ArticlesController@articlesByPage');

$router->get('articles/category/{category}', 'ArticlesController@articlesByCategory');
$router->get('articles/category/{category}/page/{page}', 'ArticlesController@articlesByCategory');

$router->get('articles/search/{searchTerm}', 'ArticlesController@search');
$router->get('articles/search/{searchTerm}/page/{page}', 'ArticlesController@search');