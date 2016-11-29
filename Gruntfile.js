module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'styles/dist/main.css': 'styles/src/main.scss'
                }
            }
        },
        watch: {
            styles: {
                files: ['styles/src/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['sass']);

};