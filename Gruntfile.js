var files = {};
var themeDirectory = "wordpress/wp-content/themes/theme";


files.less = [
    themeDirectory+'/less/base.scss'
];
files.js = [
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
    themeDirectory+'/js/script.js'

];
files.exclusions = [
    '.DS_Store',
    'Thumbs.db',
    '.git',
    '.idea',
    '.gitignore'
];


module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                files: {
                    'wordpress/wp-content/themes/theme/style.css': 'assets/scss/index.scss'
                }
            }
        },
        uglify: {
            my_target: {
                files: {
                    'wordpress/wp-content/themes/theme/script.js': files.js
                }
            }
        },
        watch: {
            css: {
                files: ['assets/scss/*.scss'],
                tasks: ['sass']
            },
            js: {
                files: ['assets/js/*.js'],
                tasks: ['uglify']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-ftp-deploy');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['sass', 'uglify', 'watch']);
};