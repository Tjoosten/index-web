<?php

Breadcrumbs::register('news-create', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('index'));
    $breadcrumbs->push('Nieuwsberichten', route('news.admin.index'));
    $breadcrumbs->push('Nieuwsbericht toevoegen', route('news.admin.create'));
});