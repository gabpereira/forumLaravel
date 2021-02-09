# ./config/deploy.rb

lock '3.15.0'
set :application, 'LaravelCapistrano'
set :repo_url, 'git@github.com:gabpereira/forumLaravel.git'
# Default branch is :master
set :branch, ENV["branch"] || "master"
# Default deploy_to directory is /var/www/laravel-capistrano
set :deploy_to, '/home/cld2_11/cld2-11.mycpnv.ch'
# set :laravel_dotenv_file, '/var/www/secrets/.env'
# Default value for keep_releases is 5
set :keep_releases, 5
task :set_php_version do
    on roles(:all) do
      execute "ls /home/cld2_11/.data/cld2-11.mycpnv.ch_php* 2>/dev/null | sed -E 's/.+(php[[:digit:]]+)$/\\1/' >/tmp/.php-cli-version"
    end
end
SSHKit.config.command_map[:composer] = "php -d allow_url_fopen=true #{shared_path.join('composer')}"
append :linked_dirs, 
    'storage/app',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs'
namespace :composer do
    desc "Running Composer Install"
    task :install do
        on roles(:composer) do
            within release_path do
                execute :composer, "install --no-dev --quiet --prefer-dist --optimize-autoloader"
            end
        end
    end
end
namespace :laravel do
    task :fix_permission do
        on roles(:laravel) do
            execute :chmod, "-R ug+rwx #{shared_path}/storage/ #{release_path}/bootstrap/cache/"
            execute :chgrp, "-R www-data #{shared_path}/storage/ #{release_path}/bootstrap/cache/"
        end
    end
    task :configure_dot_env do
    dotenv_file = fetch(:laravel_dotenv_file)
        on roles (:laravel) do
        execute :cp, "#{dotenv_file} #{release_path}/.env"
        end
    end
end
before 'composer:run', 'set_php_version'
Rake::Task['laravel:optimize'].clear_actions rescue nil
namespace :deploy do
    after :updated, "composer:install"
    after :updated, "laravel:fix_permission"
    after :updated, "laravel:configure_dot_env"
    after :updated, "npm install"
    after :updated, "npm run dev"
end
