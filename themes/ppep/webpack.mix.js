let mix = require('laravel-mix')
require('laravel-mix-imagemin')

if (!mix.inProduction()) {
  mix.browserSync({
    proxy: 'localsite.com',
    files: [
      'assets/**/*',
      'layouts/**/*',
      'pages/**/*',
      'partials/**/*',
      '../plugins/**/*',
    ]
  })
  mix.webpackConfig({devtool: "inline-source-map"})
    .sourceMaps()
}

mix.setPublicPath('assets/dist');

mix
  .ts('assets/src/js/app.ts', 'assets/dist/js/')
  .sass('assets/src/css/style.scss', 'assets/dist/css/')
  .imagemin('images/*', {
    context: 'assets/src'
  })
