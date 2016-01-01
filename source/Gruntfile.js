'use strict';

module.exports = function(grunt) {

	require('load-grunt-tasks')(grunt);


	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		app: 'fos',
		dist: 'webroot',

		sass: {
			options: {
				includePaths: ['<%= app %>/components/foundation/scss']
			},
			dist: {
				options: {
					outputStyle: 'extended'
				},
				files: {
					'<%= app %>/css/app.css': '<%= app %>/scss/app.scss'
				}
			}
		},

		jshint: {
			options: {
				jshintrc: '.jshintrc'
			},
			all: [
				'Gruntfile.js',
				'<%= app %>/js/**/*.js'
			]
		},

		clean: {
			dist: {
				src: ['<%= dist %>/css/*', '<%= dist %>/js/*', '<%= dist %>/fonts/*',]
			},
		},

		copy: {
			dist: {
				files: [{
					expand: true,
					cwd:'<%= app %>',
					src: ['fonts/**', '**/*.html', '*.txt', '!**/*.scss', '!components/**'],
					dest: '<%= dist %>'
				} , {
					expand: true,
					flatten: true,
					src: [
						'<%= app %>/components/octicons/octicons/*'],
					dest: '<%= dist %>/css/',
					filter: 'isFile'
				} ]
			},
		},

		cssmin: {
		  target: {
			files: [{
			  expand: true,
			  cwd: '<%= app %>/css',
			  src: ['*.css', '!*.min.css'],
			  dest: '<%= dist %>/css',
			  ext: '.min.css'
			}]
		  }
		},

		imagemin: {
			target: {
				files: [{
					expand: true,
					cwd: '<%= app %>/images/',
					src: ['**/*.{jpg,gif,svg,jpeg,png}'],
					dest: '<%= dist %>/img/'
				}]
			}
		},

        uglify: {
          options: {
            sourceMap: true
          },
          dist: {
            files: {
              '<%= dist %>/js/animated-background.min.js': '<%= app %>/js/animated-background.js',
              '<%= dist %>/js/repository.min.js': '<%= app %>/js/repository.jquery.js'
            }
          }
        },

		concat: {
          css: {
            src: [
                '<%= app %>/components/bootstrap/dist/css/bootstrap.min.css',
                '<%= app %>/css/styles.css',
                '<%= app %>/components/remodal/dist/remodal.css',
                '<%= app %>/components/remodal/dist/remodal-default-theme.css',
                '<%= app %>/components/octicons/octicons/octicons.css'
            ],
            dest: '<%= app %>/css/app.css'
          },
		  js: {
		    src: [
		    	'<%= app %>/components/jquery/dist/jquery.min.js',
		    	'<%= app %>/components/bootstrap/dist/js/bootstrap.min.js',
		    	'<%= app %>/components/remodal/dist/remodal.min.js',
		    	'<%= app %>/components/raf.js/raf.min.js',
		    	'<%= app %>/js/common.jquery.js'
	    	],
		    dest: '<%= dist %>/js/libraries.js'
		  },
		},

		useminPrepare: {
			html: ['<%= app %>/index.html'],
			options: {
				dest: '<%= dist %>'
			}
		},

		usemin: {
			html: ['<%= dist %>/**/*.html', '!<%= app %>/components/**'],
			css: ['<%= dist %>/css/**/*.css'],
            js: ['<%= dist %>/js/**/*.js'],
			options: {
				dirs: ['<%= dist %>']
			}
		},

		watch: {
			grunt: {
				files: ['Gruntfile.js'],
				tasks: ['sass']
			},
			sass: {
				files: '<%= app %>/scss/**/*.scss',
				tasks: ['sass']
			},
			livereload: {
				files: ['!<%= app %>/components/**', '<%= app %>/js/**/*.js', '<%= app %>/css/**/*.css'],
				options: {
					livereload: true
				}
			}
		},

	});

	grunt.registerTask('compile-sass', ['sass']);
	grunt.registerTask('default', ['compile-sass', 'watch']);
	grunt.registerTask('validate-js', ['jshint']);
	grunt.registerTask('publish', ['compile-sass', 'clean:dist', 'concat', 'useminPrepare', 'copy:dist', 'newer:imagemin', 'cssmin', 'uglify', 'usemin']);
};
