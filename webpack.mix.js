const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').vue()
    .postCss("resources/css/app.css", "public/css", [
    	require("postcss-import"),
     	require('postcss-mixins'),
     	require("tailwindcss"),
     	require('postcss-nested'),
     ]).version();
