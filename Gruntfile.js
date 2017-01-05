var files = {};
var themeDirectory = "wordpress/wp-content/themes/theme";


files.less = [
    themeDirectory+'/less/base.less',
];
files.js = [
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    themeDirectory+'/js/script.js'
];
files.exclusions = [
    '.DS_Store',
    'Thumbs.db',
    '.git',
    '.idea',
    '.gitignore',
];


var options = {
    livereload: {
        host: 'localhost',
        port: 9001,
    }
};

var auth = {
    host: '',
    port: 21,
    authKey: 'ftpdata'
};



module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        less: {
            development: {
                options: {
                    paths: ['assets/css'],
                    compress: true,
                    plugins: [
                        new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]}),
                    ],
                    compress: false,
                    banner: "/* \nTheme Name: Freddie Quintana\nAuthor: bytabo\nAuthor URI: http://bytabo.de\nText Domain: freddie-quintana\n*/"
                },
                files: {
                    'wordpress/wp-content/themes/freddie-quintana/style.css': files.less
                }
            }
        },
        uglify: {
            my_target: {
                files: {
                    'wordpress/wp-content/themes/freddie-quintana/dist/main.js': files.js
                }
            }
        },
        'ftp-deploy': {
            all: {
                auth: auth,
                src: 'wordpress',
                dest: '/',
                exclusions: files.exclusions
            },
            theme: {
                auth: auth,
                src: themeDirectory,
                dest: themeDirectory,
                exclusions: files.exclusions
            }
        },
        watch: {
            css: {
                files: [themeDirectory+'/less/*.less'],
                tasks: ['less']
            },
            js: {
                files: [themeDirectory+'/js/*.js'],
                tasks: ['uglify']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-ftp-deploy');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['less', 'uglify', 'watch']);
    grunt.registerTask('publish', ['ftp-deploy:theme']);
    grunt.registerTask('publish-all', ['ftp-deploy:all']);
};