host = 'opensourcebridge.org'
path = '/var/www/bridgepdx_wordpress/wp-content/themes/osbp_wordpress_theme_v3/'

desc "Deploys common style files using rsync"
task :deploy do
  # rsync: (u)pdate (v)erbose e(x)clude-other-devices (r)ecursive preserve-sym(l)inks preserve-(p)ermissions preserve-(D)evices
  sh "rsync -uvxrlpD --progress --delete --exclude=.* --exclude=Rakefile ./ #{host}:#{path}"
end
