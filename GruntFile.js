
'use strict';
//Gruntfile
module.exports = function (grunt) {

    require('load-grunt-tasks')(grunt);
    require('time-grunt')(grunt);

    grunt.initConfig({
        concat: {
            options: {
                separator: ';',
            },
            frontend: {
                src: [
                    "js/jquery.min.js",
                    "js/bootstrap.min.js",
                    "js/smoothscroll.min.js",
                    "js/magnificPopup.min.js",
                    "js/isotope.min.js",
                    "js/isotopeExtension.min.js",
                    "js/validate.min.js",
                    "js/form.min.js",
                    "js/firefly.js",
                    "js/preloader.js",
                    "js/custom.js"
                ],
                dest: 'assets/js/frontend.js'
            },
            frontendcss: {
                options: {
                    separator: "\n"
                },
                src: [
                    "css/bootstrap.min.css",
                    "css/animate.min.css",
                    "css/isotope.min.css",
                    "css/magnificPopup.min.css",
                    "css/custom.css"
                ],
                dest: 'assets/css/frontend.css'
            },
        },

        uglify: {
            options: {
                mangle: true
            },
            frontend: {
                files: {
                    './assets/js/frontend.js': './assets/js/frontend.js',
                }
            }
        },

        cssmin: {
            frontendcss: {
                options: {
                    banner: '/* Minified for maximum performance */'
                },
                files: {
                    'assets/css/frontend.css': ['assets/css/frontend.css']
                }
            }
        },

        watch: {
            frontend: {
                files: [
                    //watched files
                    "js/jquery.min.js",
                    "js/preloader.js",
                    "js/bootstrap.min.js",
                    "js/smoothscroll.min.js",
                    "js/magnificPopup.min.js",
                    "js/isotope.min.js",
                    "js/isotopeExtension.min.js",
                    "js/validate.min.js",
                    "js/form.min.js",
                    "js/firefly.js",
                    "js/custom.js",
                    "css/bootstrap.min.css",
                    "css/animate.min.css",
                    "css/isotope.min.css",
                    "css/magnificPopup.min.css",
                    "css/custom.css",
                    "./index.html"
                ],
                tasks: ['concat:frontend', 'uglify:frontend', 'concat:frontendcss', 'cssmin:frontendcss'], //tasks to run
                options: {
                    livereload: true //reloads the browser
                }
            }
        },

        connect: {
        	options : {
        		port: 9000,
        		livereload: 35729,
        		hostname: '127.0.0.1'
        	},
        	livereload: {
        		options: {
        			open: true,
        			base: "./"
        		}
        	}
        }



    });

    // Register the serve task
    grunt.registerTask('serve', function (target) {
        grunt.task.run([
            'connect:livereload',
            'watch'
        ]);
    });


    // Task definition
    grunt.registerTask('default', ['connect:livereload','watch']);




};