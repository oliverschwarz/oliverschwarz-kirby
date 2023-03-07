# oliverschwarz-kirby

This is a repository to host my personal website backend based on the cm system Kirby 3. It contains the templates and chunks that I need in the backend to run the site.

## Structure

I will track only the required backend resources to run the site. This usually contains the `assets/` and the `site/` directory. It does *not* contain the content of the site. Maybe I'll do that later. So let's have a look at the structure.

* `assets/`
  * `htaccess` - the htaccess file, contains server config & security/data privacy measures
  * `css/` - contains the layout (incl. normalize.css)
  * `images/` - contains all images used throughout the site
* `site/`
  * `blueprints/` - contains the required blueprints for pages, articles and the blog
  * `snippets/` - contains all the snippets used throughout the website (header, footer, nav)
  * `templates/` - contains all existing templates

## Putting it all together

Putting it all together will be a little bit of a manual thing for the time being. Just install Kirby & get it running (config, auth and such). Then copy the folders to the specific directories. At the end copy `assets/htaccess` to `/.htaccess`. That should do it.

## Resources

* https://getkirby.com
* https://necolas.github.io/normalize.css/
* https://oliverschwarz.info
* https://github.com/googlefonts/NunitoSans

## Kirby tutorial

* On YouTube: [About site.txt](https://youtu.be/zUPqqrhbcR8?t=794)