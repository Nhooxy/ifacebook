module.exports = function (grunt) {

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        cssmin: {
            combine: {
                options: {
                    report: 'min'
                },
                files: {
                    'css/min.css': [
                        'css/bootstrap.css',
                        'css/jquery-ui.css',
                        'css/dropzone.css',
                        'css/select2.css',
                        'css/override.css',
                        'css/font-awesome.css'
                    ]
                }
            }
        },
        uglify: {
            options: {
                mangle: false,
                sourceMapName: 'js/built/app.map'
            },
            dist: {
                files: {
                    'js/min.js': [
                        'js/jquery.js',
                        'js/bootstrap.js',
                        'js/jquery-ui.js',
                        'js/dropzone.js',
                        'js/select2.js',
                        'js/notification.js',
                        'js/tools.js',
                        'js/monDropzone.js',
                        'js/editionProfil.js',
                        'js/connection.js',
                        'js/menu.js',
                        'js/chat.js',
                        'js/bottom.js',
                        'js/send.js',
                        'js/likeShare.js',
                        'js/init.js'
                    ]
                }
            }
        }
    });

    grunt.registerTask('default', ['css', 'javascript']);
    grunt.registerTask('css', ['cssmin']);
    grunt.registerTask('javascript', ['uglify']);

};