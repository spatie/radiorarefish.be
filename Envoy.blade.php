@setup
$server = 'radiorarefish.be';
$pathOnServer = '/home/forge/radiorarefish.be';

function logMessage($message) {
return "echo '\033[32m" .$message. "\033[0m';\n";
}
@endsetup

@servers(['web' => 'spatie.be', 'local' => '127.0.0.1'])

@task('start deplyment', ['on' => 'local'])
{{ logMessage("🏃  Starting deployment...") }}
git checkout master
git pull origin master
@endtask

@task('bring app down', ['on' => 'web'])
{{ logMessage("🌀  Cloning repository...") }}
cd '{{ $pathOnServer }}'
php artisan down
@endtask

@task('pull changes on server', ['on' => 'web'])
{{ logMessage("🌀  Pulling changes on server...") }}
cd '{{ $pathOnServer }}'
git pull origin master
@endtask

@task('run composer', ['on' => 'web'])
{{ logMessage("🚚  Running Composer...") }}
cd '{{ $pathOnServer }}'
composer install
@endtask

@task('run yarn', ['on' => 'web'])
{{ logMessage("📦  Running Yarn...") }}
yarn config set ignore-engines true
yarn
@endtask

@task('cache all the things', ['on' => 'web'])
{{ logMessage("✨  Optimizing installation...") }}
cd '{{ $pathOnServer }}'
php artisan clear-compiled;
php artisan cache:clear

php artisan optimize
php artisan config:cache
sudo service php7.1-fpm restart
@endtask

@task('migrate database, ['on' => 'web'])
{{ logMessage("🙈  Migrating database...") }}
cd '{{ $pathOnServer }}'
php artisan migrate --force
@endtask


@task('bring app up', ['on' => 'web'])
{{ logMessage("🙏  Blessing new release...") }}
echo 'bringing app up'
cd '{{ $pathOnServer }}'
php artisan up
@endtask

@task('finish deploy', ['on' => 'local'])
{{ logMessage("🚀  Application deployed!") }}
@endtask

@macro('deploy')
start deployment
bring app down
pull changes on server
run composer
cache all the things
migrate database
bring app up
finish deploy
@endmacro

@macro('deploy-code')
deploy only code
cache all the things
@endmacro

@task('deploy only code',['on' => 'web'])
cd {{ $pathOnServer }}
git pull origin master
@endtask