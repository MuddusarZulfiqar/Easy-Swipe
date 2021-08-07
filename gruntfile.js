/**
 * Created by Atif Arif on 8/23/2016.
 */
module.exports = function(grunt) {
    //require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
    const sass = require('node-sass');

    require('load-grunt-tasks')(grunt);
    grunt.initConfig({
        //pkg: grunt.file.readJSON('package.json'),
        serve: {
            options: {
                port: 9000
            }
        },
        // concat: {
        //     js: {
        //         src: ['bower_components/jquery/dist/jquery.js',
        //             'bower_components/bootstrap/dist/js/bootstrap.js',
        //             'bower_components/owl.carousel/dist/owl.carousel.js',
        //             'bower_components/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js',
        //             'bower_components/select2/dist/js/select2.js',
        //             'bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.js',
        //             'bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js',
        //             'bower_components/bootstrap-select/dist/js/bootstrap-select.js',
        //             'bower_components/bootstrap-star-rating/js/star-rating.js',
        //             'bower_components/slick-carousel/slick/slick.js',
        //             'bower_components/bootstrap3-typeahead/bootstrap3-typeahead.js',
        //
        //             'src/js/*.js'],
        //         dest: 'src/dist/main.js'
        //     },
        //     css: {
        //         src: ['src/sass/_variables.scss',
        //             'bower_components/bootstrap/dist/css/bootstrap.css',
        //             'bower_components/select2/dist/css/select2.css',
        //             'bower_components/owl.carousel/dist/assets/owl.carousel.css',
        //             'bower_components/font-awesome/css/font-awesome.css',
        //             'bower_components/jquery.mb.ytplayer/dist/css/jquery.mb.YTPlayer.min.css',
        //             'bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.css',
        //             'bower_components/bootstrap-select/dist/css/bootstrap-select.css',
        //             'bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css',
        //             'bower_components/bootstrap-star-rating/css/star-rating.css',
        //             'bower_components/slick-carousel/slick/slick.css',
        //             'src/sass/**/*.scss',
        //             'src/sass/*.scss',
        //             'src/css/component.css',
        //             'src/css/print.css'],
        //         dest: 'src/css/build.scss'
        //     },
        //     extras:{
        //         src: ['bower_components/bootstrap-rtl/dist/css/bootstrap-rtl.css',
        //             'src/css/ar.css',],
        //         dest: 'src/dist/main-ar.css'
        //     }
        //
        // },
        // uglify: {
        //     options: {
        //         banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
        //     },
        //     my_target: {
        //         files: {
        //             'src/js/main.min.js': ['<%= concat.js.dest %>']
        //         }
        //     }
        // },
        // jshint: {
        //     // define the files to lint
        //     files: ['gruntfile.js', 'src/js/*.js'],
        //     // configure JSHint (documented at http://www.jshint.com/docs/)
        //     options: {
        //         // more options here if you want to override JSHint defaults
        //         globals: {
        //             jQuery: true,
        //             console: true,
        //             module: true
        //         }
        //     }
        // },
        // cssmin: {
        //     dist: {
        //         options: {
        //             banner: ''
        //         },
        //         files: {
        //             'src/dist/main.min.css': ['src/dist/main.css']
        //         }
        //     }
        // },

        // sass: {
        //     options: {
        //         sourceMap: true
        //     },
        //     dist: {
        //         files: {
        //             'src/css/main.css': ['src/sccs/styles.scss']
        //         }
        //     }
        // },
        sass: {
            options: {
                implementation: sass,
                sourceMap: true
            },
            dist: {
                files: {
                    'src/css/main.css': ['src/sccs/styles.scss']
                }
            }
        },
        watch: {
            files: ['src/sccs/*.scss', 'src/sccs/*/*.scss'],
            tasks: ['sass']
        },

    });
    // grunt.loadNpmTasks('grunt-contrib-jshint');
    //grunt.loadNpmTasks('grunt-contrib-concat');
    //grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    //grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.registerTask('default', [
        'sass'

    ]);
    //grunt.registerTask('default', ['sass']);
};