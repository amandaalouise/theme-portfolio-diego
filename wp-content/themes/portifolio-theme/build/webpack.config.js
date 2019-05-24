const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const webpack = require('webpack');
const autoprefixer = require('autoprefixer');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const bootstrap = new webpack.ProvidePlugin({
  $: 'jquery',
  jQuery: 'jquery',
  'windows.jQuery': 'jquery',
});
const favicon = new HtmlWebpackPlugin({
  favicon: 'src/images/favicon.ico'
});


module.exports = {
  node: {
    fs: 'empty'
  },
  entry: ['./src/js/main.js', './src/scss/style.scss'],
  output: {
    filename: './dist/js/main.min.js',
  },
  watch: true,
  module: {
    rules: [
      {
				test: /\.(ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
				loader: 'file-loader',
				query: {
					name: 'static/media/fonts/[name].[hash:8].[ext]'
				}
			},
      {
        test: /\.(woff2?|eot|ttf|otf)$/,
        loader: 'file-loader',
        options: {
          limit: 10000,
          name: '[name].[hash:7].[ext]'
        }
      },
      { test: /\.(jpe?g|png|gif|ico)$/i, loader: 'file?name=[name].[ext]' },
      {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract({
          use: [
            {
              loader: 'css-loader',
              options: {
                sourceMap: true
              }
            },
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: true,
                plugins: () => [autoprefixer]
              }
            },
            {
              loader: 'sass-loader',
              options: {
                sourceMap: true
              }
            }
          ],
          fallback: 'style-loader'
        })
      }
    ]
  },
  plugins: [bootstrap, favicon,
    new ExtractTextPlugin({
      filename: 'style.css',
      allChunks: true
    })
  ]
}
