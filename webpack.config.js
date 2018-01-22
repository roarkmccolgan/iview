var webpack = require('webpack');
var path = require('path');
var glob = require('glob');
var CleanWebpackPlugin = require('clean-webpack-plugin');
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var PurifyCSSPlugin = require('purifycss-webpack');
var UglifyJsPlugin = require('uglifyjs-webpack-plugin');
var OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
var tailwindcss = require('tailwindcss');
var inProduction = (process.env.NODE_ENV==='production');

module.exports = {
	entry: {
		antifreeze: [
		'./resources/assets/js/antifreeze/main.js',
		'./resources/assets/css/antifreeze/main.css'
		]
	},
	output: {
		path: path.resolve(__dirname, './public/bundle'),
		filename: '[name].[chunkhash].js'
	},
	module:{
		rules:[
			{
				test: /\.css$/,
				use: ExtractTextPlugin.extract({
					fallback: "style-loader",
					use: [
						{ loader: 'css-loader', options: { importLoaders: 1 } },
						'postcss-loader'
					]
				})
			},
			{
				test: /\.(png|jpg|gif|svg)$/,
				loader: 'file-loader',
				options: {
					name: 'images/[name].[ext]'
				}
			},
			{
				test: /\.(svg|eot|ttf|woff|woff2)$/,
				exclude: [/images/,/flags/],
				loader: 'file-loader',
				options: {
					name: 'fonts/[name].[ext]'
				}
			},
			{
		        test: /\.vue$/,
		        loader: 'vue-loader',
		        options: {
		          // `vue-loader` options
		        }
		      }
		]
	},
	plugins: [
		new ExtractTextPlugin("[name].[chunkhash].css"),
		new CleanWebpackPlugin(['./public/bundle'], {
			root: __dirname,
			verbose: true,
			dry: false,
			exclude: ['shared.js']
		}),
		new webpack.ProvidePlugin({
			$: "jquery",
			jQuery: "jquery",
			'window.jQuery': 'jquery'
		}),
		/*new PurifyCSSPlugin({
				// Give paths to parse for rules. These should be absolute!
				paths: glob.sync(path.join(__dirname, '*{.php,.html}')),
			}),*/
		function(){
			this.plugin('done', stats => {
				require('fs').writeFileSync(
					path.join(__dirname, 'public/manifest.json'),
					JSON.stringify(stats.toJson().assetsByChunkName)
					)
			});
		}
	],
	resolve: {
	extensions: ['*', '.js', '.vue', '.json', '.svg'],
	    alias: {
	      'vue$': 'vue/dist/vue.common.js' // 'vue/dist/vue.common.js' for webpack 1
	    }
	}
}
if(inProduction){
	module.exports.plugins.push(
		//new webpack.optimize.UglifyJsPlugin()
		new UglifyJsPlugin()
	)
	module.exports.plugins.push(
		new OptimizeCssAssetsPlugin()
	)

}