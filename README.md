# WordPress Boilerplate Theme with Gulp and Bootstrap

This is a classic WordPress theme boilerplate with a Gulp build process including customized Bootstrap 5. Assumes a 
single entry and output point for both CSS and JavaScript, so requires additional configuration if you need to serve in 
a more component-driven style with multiple entry/output.


## Development and Production Process

1. Place source files in a theme folder on your WordPress install.


2. Navigate via terminal to the theme folder and run `npm i` to install dependencies.


2. Install **Gulp CLI**.

   If you don't already have Gulp CLI installed globally, you can install it via `npm i --global gulp-cli`.


3. Update the proxy URL in gulpfile.js in the `serve` function to the local URL for your site.


4. To start the dev build process, either run the command `gulp` or use the `dev` command script in `package.json`
   (`npm run dev`). Both of these run the default gulp task which compiles, auto-prefixes, and minifies the Sass files,
   transpiles and minifies the JavaScript, and starts a Browsersync server which reloads the page on file change.

   *Note: source maps are only generated for development.*

   To build for production, run the command `gulp build --production`, or `npm run prod` for production-ready CSS
   and JavaScript.


## Bootstrap
Include specific component styles in `assets/scss/bootstrap/custom.scss`. Be aware there are dependencies across
components. Refer to [Bootstrap's Sass documentation](https://getbootstrap.com/docs/5.2/customize/sass/) for
more details on customization options.

If a component has required JavaScript, import in `assets/js/app.js`.


## Useful commands
- Run `gulp --tasks` to see available gulp tasks
