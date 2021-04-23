const path = require('path');

const obj = {
	alias: {
		"@node_modules": path.resolve(__dirname, 'node_modules'),
		"@images": path.resolve(__dirname, 	'src/images'),
		"@fonts": path.resolve(__dirname, 	'src/fonts'),
		"@js": path.resolve(__dirname, 	'src/js'),
		"@styles": path.resolve(__dirname, 	'src/styles'),
		"@less": path.resolve(__dirname, 	'src/less'),
		"@scss": path.resolve(__dirname, 	'src/scss'),
	}
}

module.exports = obj