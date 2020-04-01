const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );

module.exports = {
	...defaultConfig,
	module: {
		...defaultConfig.module,
		rules: [
			...defaultConfig.module.rules,
			{
				test: /\.css$/,
				use: [
					{
						loader: 'style-loader',
						options: {
							injectType: 'singletonStyleTag',
							attributes: { id: 'eventbrite-blocks-css' },
						},
					},
					{ loader: 'css-loader' },
					{
						loader: 'postcss-loader',
						options: {
							ident: 'postcss',
							plugins: [
								require( 'tailwindcss' ),
								require( 'autoprefixer' ),
								require( 'postcss-nested' ),
								require( 'cssnano' ),
							],
						},
					},
				],
			},
		],
	},
};
