module.exports = function(grunt) {
    grunt.initConfig({
        watch: {
        	php: {
        		files: ['src/app/**/*.php'],
        		tasks: ['copy:php']
        	},
            sass: {
                files: ['src/sass/**/**/*'],
                tasks: ['sass']
            },
            js: {
                files: ['src/js/*.js'],
                tasks: ['babel']
            },
            data: {
            	files: ['src/data/*'],
            	tasks: ['copy:data']
            }
        },
        sass: {
        	dev: {
        		options: {
        			style: 'expanded'
        		},
        		files: [{
        			expand: true,
        			cwd: 'src/sass/',
        			src: 'main.sass',
        			dest: 'public/app/assets/css',
        			ext: '.css'
        		}]
        	}
        },
        babel: {
        	options: {
        		presets: ['react']
        	},
        	dev: {
        		files: [{
        			expand: true,
        			cwd: 'src/js/',
        			src: ['*.js'],
        			dest: 'public/app/assets/js',
        			ext: '.js'
        		}]
        	}
        },
        copy: {
        	data: {
        		files: [{
        			expand: true,
        			cwd: 'src/data',
        			src: '*',
        			dest: 'public/app/assets/data',
        		}]
        	},
        	php: {
        		files: [{
        			expand: true,
        			cwd: 'src/',
        			src: "app/**/*.php",
        			dest: 'public/',
        			ext: '.php'
        		}]
        	}
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-babel');

    grunt.registerTask('default', ['watch']);
}
