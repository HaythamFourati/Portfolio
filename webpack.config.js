const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const path = require('path');

module.exports = {
  ...defaultConfig,
  entry: {
    ...defaultConfig.entry(),
    'animations': path.resolve(process.cwd(), 'src/scripts', 'animations.js'),
  },
};
