const path = require('path');

module.exports = {
    entry: './src/app.js',
    mode: 'development',
    watch: true,
    output: {
        library: 'UserList',
        libraryTarget: 'umd',
        libraryExport: 'default',
        path: path.resolve(__dirname, 'assets/js'),
        filename: 'bundle.js'
    },

    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: ['babel-loader']
            },
            {
                test: /\.scss$/,
                use: [
                    'style-loader',
                    'css-loader',
                    'postcss-loader',
                    'sass-loader'
                ]
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            }
        ]
    },
    plugins: [

    ]
};