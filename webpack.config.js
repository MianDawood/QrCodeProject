const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path')

module.exports = {

    entry: './src/js/app.js',
    mode: 'development',
    output: {
        path: `${__dirname}/dist`,
        filename: 'bundle.js',
    },
    resolve: {
        fallback: {
            "path": require.resolve("path-browserify")
        }
    },
    plugins: [new MiniCssExtractPlugin({filename: 'bundle.css',})],
    module: {
        rules: [{
                test: /\.(svg|gif|png|eot|woff|ttf)$/,
                use: [
                    'url-loader',
                ],
            },
            {
                test: /\.(scss|css)$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader',
                ]
            }
        ],
    },
    
};