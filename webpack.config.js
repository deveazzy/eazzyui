const path = require("path");

module.exports = (env) => {
  return {
    mode: "development",
    // Titik masuk: file JS utama yang juga mengimpor CSS
    entry: {
      main: "/opt/eazzy-docker/www/mirror/src/js/main.js",
    },
    output: {
      // Nama file akan memiliki hash untuk cache busting
      filename: "[name].bundle.js",
      // Simpan semua aset di folder ini
      path: path.resolve(
        __dirname,
        "/opt/eazzy-docker/www/mirror/public/assets/dist"
      ),
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: {
            loader: "babel-loader",
          },
        },
      ],
    },
    devtool: isProduction ? "source-map" : "eval-source-map",
  };
};
