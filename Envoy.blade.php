@servers(['web-1' => 'zealer@192.168.56.14', 'web-2' => 'zealer@192.168.56.15'])

@task('deploy', ['on' => ['web-1', 'web-2'], 'parallel' => true])
    cd /var/www/html/deploylaravel
    git pull origin master
    composer install
    php artisan migrate
@endtask