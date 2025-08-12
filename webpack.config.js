const path = require("path");
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageMinimizerPlugin = require('image-minimizer-webpack-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');

module.exports = {
    mode: 'development', // Pode ser 'development' ou 'production'
    //mode: 'development', // Pode ser 'development' ou 'production'
    entry: './src/index.ts', // Arquivo de entrada principal
    output: {
        filename: 'index.js', // Nome do arquivo gerado
        path: path.resolve(__dirname, 'dist'), // Pasta de saída
        clean: true, // Limpa a pasta `dist` antes de cada build
    },
    module: {
        rules: [
            {
                test: /\.css$/, // Processa arquivos CSS
                use: [
                    //'style-loader', // Injeta CSS no DOM durante o desenvolvimento
                    MiniCssExtractPlugin.loader, // Extrai o CSS para um arquivo separado
                    'css-loader', // Lê arquivos CSS
                    {
                        loader: 'postcss-loader', // Processa o Tailwind via PostCSS
                        options: {
                            postcssOptions: {
                                plugins: [
                                    require('tailwindcss'), // Inclui o Tailwind
                                    require('autoprefixer'), // Adiciona prefixos automáticos
                                ],
                            },
                        },
                    },
                ],
            },
            {
                test: /\.(png|jpg|jpeg|gif|svg)$/i, // Processa imagens
                type: 'asset/resource',
                generator: {
                    filename: 'img/[name][ext]', // Pasta de saída para imagens
                },
            },
            {
                test: /\.html$/, // Processa arquivos HTML
                use: ['html-loader'],
            },
            {
                test: /\.tsx?$/, // Para arquivos .ts e .tsx
                use: 'ts-loader', // Transpila TypeScript para JavaScript
                exclude: /node_modules/,
            },
        ],
    },
    plugins: [
        new HtmlWebpackPlugin({
            favicon: './src/favicon.png', // Caminho do favicon
            template: './src/index.html', // Arquivo HTML base
            filename: 'index.html', // Nome do arquivo de saída
            inject: 'body',  // Injetando o JS no final do body para não afetar o carregamento
            scriptLoading: 'blocking',  // Não usar defer ou async
        }),
        new HtmlWebpackPlugin({
            template: './src/pages/locacao-de-sistemas.html', // Caminho do arquivo da página
            filename: 'pages/locacao-de-sistemas.html', // Nome do arquivo de saída
            inject: 'body',  // Injetando o JS no final do body para não afetar o carregamento
            scriptLoading: 'blocking',  // Não usar defer ou async
        }),
        new HtmlWebpackPlugin({
            template: './src/lp/locacao.html', // Caminho do arquivo da página
            filename: 'lp/locacao.html', // Nome do arquivo de saída
            inject: 'body',  // Injetando o JS no final do body para não afetar o carregamento
            scriptLoading: 'blocking',  // Não usar defer ou async
        }),
        new MiniCssExtractPlugin({
            filename: 'styles.css', // Nome do CSS extraído
        }),
        new CopyWebpackPlugin({
            patterns: [
                { from: 'src/assets/pdf/', to: 'pdf' }, // Copia tudo de src/assets para dist/assets
            ],
        }),
    ],
    devServer: {
        static: './dist', // Pasta servida pelo dev server
        port: 3000, // Porta do servidor local
        open: true,
    },
    resolve: {
        extensions: ['.tsx', '.ts', '.js'], // Permite importar arquivos sem especificar a extensão
    },
    optimization: {
        minimize: true,
        minimizer: [
            new CssMinimizerPlugin(),
            new ImageMinimizerPlugin({
                minimizer: {
                    implementation: ImageMinimizerPlugin.imageminMinify,
                    options: {
                        plugins: [
                            ["imagemin-mozjpeg", { quality: 40 }],
                            ["imagemin-pngquant", { quality: [0.3, 0.5] }],
                        ],
                    },
                },
            }),
        ],
    },
};
