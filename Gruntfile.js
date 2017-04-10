module.exports = function(grunt) {

    //Initializing the configuration object
    // configurable paths
    var yeomanConfig = {
      app: 'app',
      dist: 'build'
    };

    grunt.initConfig({
    yeoman: yeomanConfig,
    // Task configuration
    concat: {
      options: {
        separator: ';',
      },
      js_frontend: {
        src: [
          'js/jquery-2.1.4.js',
          'js/velocity.min.js',
          'js/velocity.ui.min.js',
        ],
        dest: 'js/build.js',
      },
      css_frontend: {
        src: [
          'css/reset.css',
          'css/bootstrap.min.css',
          'css/bootstrap-theme.min.css',
          'css/style.css'
        ],
        dest: 'css/build.css',
      }
    },
    connect: {
      options: {
        port: 4000,
        // change this to '0.0.0.0' to access the server from outside
        hostname: '0.0.0.0',
        livereload: 35729
      },
      livereload: {
        options: {
          open: true,
          base: [
            '.tmp',
            ''
          ]
        }
      },
      dist: {
        options: {
          base: ''
        }
      }
    },
    watch: {
        js_frontend: {
          files: [
            //watched files
            'js/main.js',
            '*.html'
            ],   
          tasks: ['concat:js_frontend'],     //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
        css: {
          files: ['css/style.css', 'less/style.less'],  //watched files
          tasks: ['concat'],                          //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        }
      },
      // Compiles Sass to CSS and generates necessary files if requested
      autoprefixer: {
        options: {
          browsers: ['last 2 versions']
        },
        server: {
          files: [{
            expand: true,
            cwd: '.tmp',
            src: '**/*.css',
            dest: '.tmp'
          }]
        },
        dist: {
          files: [{
            expand: true,
            cwd: '<%= yeoman.dist %>',
            src: ['**/*.css', '!bower_components/**/*.css'],
            dest: '<%= yeoman.dist %>'
          }]
        }
      }
      });
  
  
  // Plugin loading
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-connect');
  // Task definition
  grunt.registerTask('default', ['watch']);

  grunt.registerTask('serve', function (target) {
    if (target === 'dist') {
      return grunt.task.run(['build', 'connect:dist:keepalive']);
    }

    grunt.task.run([
      'concat',
      'watch'
    ]);
  });

};