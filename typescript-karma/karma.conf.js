module.exports = function(config) {
  config.set({
    frameworks: ['jasmine', 'karma-typescript'],
    files: [
      {pattern: 'src/**/*.ts'},
      {pattern: 'test/**/*.ts'},
    ],
    preprocessors: {
      'src/**/*.ts': ['karma-typescript'],
      'test/**/*.ts': ['karma-typescript'],
    },
    reporters: ['progress', 'karma-typescript'],
    browsers: ['ChromeHeadless'],
  });
};
