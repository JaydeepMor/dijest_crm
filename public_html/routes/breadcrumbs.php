<?php

// Dashboard Index
Breadcrumbs::for('index', function ($trail) {
    $trail->push(__('Dashboard'), route('index'));
});
