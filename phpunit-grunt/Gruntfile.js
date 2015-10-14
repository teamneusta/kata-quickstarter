module.exports = function(grunt) {
	grunt.initConfig({
		phpunit: {
			classes: {
				dir: 'test/'
			},
			options: {
				bin: 'vendor/bin/phpunit',
				bootstrap: 'vendor/autoload.php',
				colors: true
			}
		},
		watch: {
			test: {
				files: ['src/**/*.*', 'test/**/*.*'],
				tasks: ['phpunit']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-phpunit');
};
