host = 'opensourcebridge.org'
path = '/var/www/bridgepdx_wordpress/wp-content/themes/osbp_wordpress_theme/'

desc "Deploys common style files using rsync"
task :deploy do
  sh "rsync -uvax --progress --delete --exclude=.* --exclude=Rakefile ./ #{host}:#{path}"
end