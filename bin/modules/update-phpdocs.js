const path = require( 'path' ),
	fs = require( 'fs' ),
	glob = require( 'glob' );

module.exports = ( path, config ) => {
	const files = glob.sync( path, config.globOpts ),
		fieldRegex = new RegExp( `^([ \\t\/*#@]*${config.name}\\s+).*$`, 'mi' );

	files.forEach( file => {
		fs.readFile( file, 'utf8', function( err, content ) {
			let updatedContent = '';
			if ( err ) {
				return console.log( err );
			}

			// If file header property already exists, update it.
			if ( content.match( fieldRegex ) ) {
				updatedContent = content.replace( fieldRegex, `$1${config.value}`);

			// If property doesnt exists, append it.
			} else if ( config.force ) {

				// Grab PHP doc blocks, https://gist.github.com/asika32764/9268066
				updatedContent = content.replace( /(<\?php\s(?:\/\*(?:[^*]|\n|(?:\*(?:[^\/]|\n)))*))(\*\/\s)/, ( match, cap1, cap2 ) => {
					return cap1 + `* @${config.name} ${config.value}\n ` + cap2;
				} );
			}

			// If content changed, log or update.
			if ( updatedContent !== content ) {
				if ( config.fix ) {
					fs.writeFile( file, content, 'utf8', function( err ) {
						if ( err ) return console.log( err );
					} );
				} else {
					console.log( `Setting ${config.name} as ${config.value} in ${file}` );
				}
			}
		} );
	} );
};
