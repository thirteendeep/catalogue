# Groots
> A frontend framework development starter-kit for Globalia projects

## Getting started
This starter-kit requires that you already have installed [Node.js](http://nodejs.org/), [Bower](http://bower.io/) and [Gulp](http://gulpjs.com/) globally on your local environment.

In Terminal, navigate to your project root directory and execute:

```shell
npm install
```

It will run *bower install* then *npm install* and finally *gulp initial*, to setup the whole package into your current directory.

If you are on a dev or live server, you should run npm install with the security privileges of the user you're currently configuring:

```shell
sudo -u user npm install
```

## Server dependencies

You will need the 2 following packages installed on your server:

- libjpeg62-dev (https://packages.debian.org/sid/libjpeg62-dev)

```shell
sudo apt-get install libjpeg62-dev
```

- libpng-dev (http://www.libpng.org/pub/png/libpng.html)

```shell
sudo apt-get install libpng-dev
```

## Structure

```shell
groots/
    |-- favicons/
    │   ├── favicon.png
    |-- gui/
    |-- gulp/
    |   └── configs/
    |   |   └── core.js
    |   |   └── options.default.js
    |   |   └── project.js
    |   └── tasks/
    |   |   └── bower.js
    |   |   └── clean.js
    |   |   └── fonts.js
    |   |   └── images.js
    |   |   └── livereload.js
    |   |   └── scripts.js
    |   |   └── styles.js
    ├── images/
    │   └── svg/
    ├── js/
    │   ├── main.js
    │   └── plugins/
    ├── scss/
    │   ├── main.scss
    │   ├── base/
    │   │   ├── _forms.scss
    │   │   ├── _global.scss
    │   │   ├── _typo.scss
    │   │   ├── _variables.scss
    │   │   ├── _wysiwyg.scss
    │   │   └── base.scss
    │   ├── components/
    │   └── fonts/
    │       ├── fonts.scss
    │       ├── google.list
    │   ├── layouts/
    │   └── utilities/
    │       ├── _functions.scss
    │       ├── _helpers.scss
    │       ├── _mixins.scss
    │       └── utilities.scss
    └── vendor/
.gitignore
.bowerrc
.jshintrc
bower.json
contributors.txt
gulpfile.js
package.json
README.md
```

## Gulp

Gulp configs and individual tasks are located in gulp folder. All tasks can be disabled via config files.

#### Configs

In Gulp config folder you'll find three config files.

- `core.js` this is the main config file, it shouldn't be changed
- `project.js` this is the project config file, it is set globally for every project
- `options.default.js` this is the user specific options, you can duplicate this file and rename it `options.js` then modify it as you want (`options.js` is ignored by git)

#### Bundle Tasks

Task Name     | Description
------------- | -----------------------------------------------------
`default`     | Default task, used for dev (compile SASS + run autoprefixer + optimize images + concatene JS + copy fonts and gui files)
`initial`     | Initialize, same as default but concatene and compress bower components, it also download google webfonts and generate scss file for them
`build`       | Production task, same as default but compress CSS and JS too, it also strip console and debugger statements and delete sourcemaps
`watch`       | Watch IMG CSS and JS files
`live`        | Watch files and enable livereload (you need to have [livereload browser extension](http://livereload.com/extensions/))

#### Individual Tasks

Task Name      | Description
-------------- | ----------------------------------------------------
`images      ` | Copy and optimize images
`styles`       | Compile SASS and run autoprefixer
`styles:build` | Compile SASS, compress CSS and run autoprefixer
`scripts`      | Concatene and lint JS
`scripts:build`| Concatene and compress JS, it also strip console and debugger statements
`fonts`        | Copy fonts in public directory
`fonts:google` | Download google webfonts and generate scss file for them
`gui`          | Copy gui files in public directory
`bower`        | Concatene and compress bower components
`favicons`     | Generate favicons
`clean`        | Clean sourcemaps, used only with build bundle task
