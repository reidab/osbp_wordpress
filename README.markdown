Open Source Bridge Wordpress Theme
==================================

This is the WordPress theme for opensourcebridge.org.

Setup
-----
If you're developing the theme, you need to be aware that by default it gets its CSS styles from the production servers at opensourcebridge.org, see the "Common Styles" below for details.

However, if you wish to run this theme using other styles, you can create a file in this theme directory called "my_common_styles_url.txt" and put the URL containing the common style to use into it.

For example, if you're running a local instance of OCW with its checkout of the styles, you might put the following into the "my_common_styles_url.txt" to have it use those:

    http://localhost:3000/themes/bridgepdx/stylesheets/common_css/osbp_common_v3.css

Common Styles
-------------
Due to the fact that we're sharing a set of common styles between several different web apps, this repository only contains styles that relate directly to the WordPress installation. The common styles, which handle the majority of styling and branding on the site, can be found at http://github.com/reidab/osbp_styles/

Modifying
---------
If you need to make changes to the theme, please do not update files directly on the production server. Instead, modify a local copy of this repository and push the changes back here. If you have access to the production server, you can run <code>rake deploy</code> from within the theme directory to copy the files into place. If you don't have access to the production server, push your changes into this repository or a fork and ask someone with access to deploy them.

Contact
-------
If you have any questions, please contact web@opensourcebridge.org
