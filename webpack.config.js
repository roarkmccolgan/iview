var webpack = require('webpack');
var path = require('path');
var glob = require('glob');
var CleanWebpackPlugin = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
var PurifyCSSPlugin = require('purifycss-webpack');
var UglifyJsPlugin = require('uglifyjs-webpack-plugin');
var OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const VueLoaderPlugin = require('vue-loader/lib/plugin')
var tailwindcss = require('tailwindcss');
var inProduction = (process.env.NODE_ENV==='production');

module.exports = {
	entry: {
		antifreeze: [
			"babel-polyfill",
			'./resources/assets/js/antifreeze/main.js',
			'./resources/assets/css/antifreeze/main.css'
		],
		trendy: [
			"babel-polyfill",
			'./resources/assets/js/trendy/main.js',
			'./resources/assets/css/trendy/main.css'
		],
		nttdata: [
			"babel-polyfill",
			'./resources/assets/js/nttdata/main.js',
			'./resources/assets/css/nttdata/main.css'
		],
		dassault: [
			"babel-polyfill",
			'./resources/assets/js/dassault/main.js',
			'./resources/assets/css/dassault/main.css'
		],
		hitachi: [
			"babel-polyfill",
			'./resources/assets/js/hitachi/main.js',
			'./resources/assets/css/hitachi/main.css'
		],
		vmware: [
			"babel-polyfill",
			'./resources/assets/js/vmware/main.js',
			'./resources/assets/css/vmware/main.css'
		],
		sapagile: [
			"babel-polyfill",
			'./resources/assets/js/sapagile/main.js',
			'./resources/assets/css/sapagile/main.css'
		],
		ibmcloud: [
			"babel-polyfill",
			'./resources/assets/js/ibmcloud/main.js',
			'./resources/assets/css/ibmcloud/main.css'
		],
		sapagileglobal: [
			"babel-polyfill",
			'./resources/assets/js/sapagileglobal/main.js',
			'./resources/assets/css/sapagileglobal/main.css'
		],
		snow: [
			"babel-polyfill",
			'./resources/assets/js/snow/main.js',
			'./resources/assets/css/snow/main.css'
		],
		redhat: [
			"babel-polyfill",
			'./resources/assets/js/redhat/main.js',
			'./resources/assets/css/redhat/main.css'
		],
		dassaultlean: [
			"babel-polyfill",
			'./resources/assets/js/dassaultlean/main.js',
			'./resources/assets/css/dassaultlean/main.css'
		]
	},
	stats: {
		children: false,
	},
	output: {
		path: path.resolve(__dirname, './public/bundle'),
		filename: '[name].[chunkhash].js'
	},
	module:{
		rules:[
			{ test: /\.js$/, exclude: /node_modules/, loader: "babel-loader" },
			{
				test: /\.css$/,
				use: [
					{
						loader: MiniCssExtractPlugin.loader,
						options: {
				            hmr: process.env.NODE_ENV === 'development',
				        },
				    },
				    'css-loader',
				    {
				        loader: 'postcss-loader'
				    }
			    ],
				// use: ExtractTextPlugin.extract({
				// 	fallback: "style-loader",
				// 	use: [
				// 		{ loader: 'css-loader', options: { importLoaders: 1 } },
				// 		'postcss-loader'
				// 	]
				// })
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
		new VueLoaderPlugin(),
		new MiniCssExtractPlugin({
			path: path.resolve(__dirname, './public/bundle'),
			filename: '[name].[chunkhash].css'
		}),
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
	},
	watchOptions: {
	    ignored: '/node_modules'
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
	module.exports.plugins.push(
		new webpack.DefinePlugin({
			'process.env': {
				NODE_ENV: '"production"'
			}
		})
	)
}