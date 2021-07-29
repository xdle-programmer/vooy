const path = require('path');
const fs = require('fs');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");


let getFiles = function (dir, files_, extension) {
    files_ = files_ || [];
    let files = fs.readdirSync(dir);
    let regular = new RegExp('.\\.' + extension + '$');

    for (let i in files) {

        let name = dir + '/' + files[i];
        if (fs.statSync(name).isDirectory()) {
            getFiles(name, files_, extension);
        } else if (regular.test(name)) {
            files_.push(name);
        }
    }
    return files_;
};

// Js файлы
let jsEntryArray = [path.resolve(__dirname, './resources/index.js')];
getFiles(path.resolve(__dirname, './resources/blocks'), jsEntryArray, 'js');

let jsBackendArray = [];
getFiles(path.resolve(__dirname, './resources/js-backend'), jsBackendArray, 'js');

// Файлы стилей
let styleEntryArray = [];
getFiles(path.resolve(__dirname, './resources/blocks'), styleEntryArray, 'scss');
getFiles(path.resolve(__dirname, './resources/blocks'), styleEntryArray, 'css');

console.log(jsEntryArray);
console.log('------------------');
console.log(jsBackendArray);

let jsArray = jsEntryArray.concat(jsBackendArray);
let fullArray = jsArray.concat(styleEntryArray);

module.exports = {
    mode: 'development',
    entry: {
        main: fullArray,
    },
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, './public')
    },
    devtool: "source-map",
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: 'babel-loader',
                exclude: '/node_modules/'
            },
            {
                test: /\.css$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    {
                        loader: 'postcss-loader',
                        options: {config: {path: path.resolve(__dirname, 'postcss.config.js')}}
                    },
                ],
            },
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                    },
                    // {
                    //     loader: 'postcss-loader',
                    //     options: {config: {path: path.resolve(__dirname, 'postcss.config.js')}}
                    // },
                    {
                        loader: 'sass-loader',
                    }
                ],
            },
            {
                test: /\.(png|jpg|svg|ttf|eot|woff|woff2)$/,
                use: [{
                    loader: 'file-loader',
                    options: {
                        name: '[path][name].[ext]',
                        emitFile: false,
                    }
                }],
            },
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '[name].css',
        }),
    ],
};
