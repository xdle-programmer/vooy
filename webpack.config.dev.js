const path = require('path');
const fs = require('fs');
const merge = require('webpack-merge');
const baseConfig = require('./webpack.config.base');
const HtmlWebpackPlugin = require('html-webpack-plugin');

const PATHS = {
    src: path.resolve(__dirname, './resources'),
};

const PAGES_DIR = `${PATHS.src}/pages/`;
const PAGES = fs.readdirSync(PAGES_DIR).filter(fileName => fileName.endsWith('.pug'));


module.exports = merge(baseConfig, {
    module: {
        rules: [
            {
                test: /\.pug$/,
                loader: 'pug-loader',
                options: {pretty: true}
            },
        ]
    },
    plugins: [
        ...PAGES.map(page => new HtmlWebpackPlugin({
            template: `${PAGES_DIR}/${page}`,
            minify: false,
            filename: `./proof-html/${page.replace(/\.pug/, '.html')}`,
        }))
    ],
    devServer: {
        overlay: true,
        contentBase: path.join(__dirname, 'public'),
        watchContentBase: true,
    }
});
