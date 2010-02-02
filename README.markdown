Open Source Bridge Wordpress Theme
==================================
This is the WordPress theme for opensourcebridge.org.

Due to the fact that we're sharing a set of common styles between several different web apps, this repository only contains styles that relate directly to the WordPress installation. The common styles, which handle the majority of styling and branding on the site, can be found at http://github.com/reidab/osbp_styles/

Modifying
---------
If you need to make changes to the theme, please do not update files directly on the production server. Instead, modify a local copy of this repository and push the changes back here. If you have access to the production server, you can run <code>rake deploy</code> from within the theme directory to copy the files into place. If you don't have access to the production server, push your changes into this repository or a fork and ask someone with access to deploy them.

Contact
-------
If you have any questions, please contact reid@opensourcebridge.org