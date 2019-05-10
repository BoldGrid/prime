const fs = require( 'fs' ),
	glob = require( 'glob' ),
	path = require( 'path' );

module.exports = ( to, name, config ) => {
	const ucFirst = str => str.charAt(0).toUpperCase() + str.slice(1);

	if ( to.includes( 'readme.txt' ) || to.includes( 'style.css' ) ) {
		fs.readFile( to, 'utf8', function( err, content ) {
			if ( err ) {
				return console.log( err );
			}

			let result = content.replace( /prime/g, name.toLowerCase() );
			result = content.replace( /Prime/g, ucFirst( name ) );

			if ( result !== content ) {
				fs.writeFile( to, result, 'utf8', function( err ) {
					if ( err ) {
						return console.error( err );
					}
				} );
			}

			console.info( `Updated theme name from Prime to ${ucFirst( name )} in ${to}` );
		} );
	} else {
		const files = glob.sync( to, config.globOpts );

		files.forEach( file => {
			fs.readFile( file, 'utf8', function( err, content ) {
				if ( err ) {
					return console.log( err );
				}

				let result = content.replace( /(\s\*+\s@package\s)([p|P]rime)/, `$1${ name.toLowerCase() }` );

				if ( result !== content ) {
					fs.writeFile( file, result, 'utf8', function( err ) {
						if ( err ) {
							return console.error( err );
						}
					} );
				}

			} );
		} );
	}
};
