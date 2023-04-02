<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'projekti nimi');
set('remote_user', 'virt109714'); //zone ssh kasutaja nimi
set('http_user', 'virt109714');  //zone ssh kasutaja nimi
set('keep_releases', 2);

// Hosts
host('tak21zukker.itmajakas.ee') // oma zone'i domeen
    ->setHostname('tak21zukker.itmajakas.ee') // oma zone'i domeen
    ->set('http_user', 'virt109714') //zone ssh kasutaja nimi
    ->set('deploy_path', '~/domeenid/www.nimi.itmajakas.ee/portfolio')
    ->set('branch', 'dev');

// Tasks
set('repository', 'repo nimi') //vt git clone via ssh;
//Restart opcache
task('opcache:clear', function () {
    run('killall php81-cgi || true');
})->desc('Clear opcache');
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    'deploy:publish',
    'opcache:clear',
    'artisan:cache:clear'
]);
after('deploy:failed', 'deploy:unlock');