README
======

Setting Up Your VHOST
=====================

The following is a sample VHOST you might want to consider for your project.

<VirtualHost *:80>
   DocumentRoot "path_to_project/twitter_vote/public"
   ServerName twitter_vote.local

   # This should be omitted in the production environment
   SetEnv APPLICATION_ENV development

   <Directory "path_to_project/twitter_vote/public">
       Options Indexes MultiViews FollowSymLinks
       AllowOverride All
       Order allow,deny
       Allow from all
   </Directory>

</VirtualHost>
