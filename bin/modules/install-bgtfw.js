const got  = require( 'got' ),
	unzip  = require( 'unzip-stream' ),
	pkgDir = require( 'pkg-dir' );
	fs     = require( 'fs' );
module.exports = async ( localBgtfw ) => {
	const rootDir = await pkgDir( __dirname );
	return new Promise( (resolve, reject) => {
		if ( localBgtfw ) {
			console.log( 'Creating theme from local bgtfw.zip file' );
			fs.createReadStream('bgtfw.zip' )
			.pipe( unzip.Extract( { path: 'inc' } ) )
			.on( 'error', ( err ) => {
				console.error( err );
			} )
			.on( 'finish', () => {
				resolve();
			} );
		} else {
			got.stream( 'https://github.com/BoldGrid/boldgrid-theme-framework/releases/latest/download/bgtfw.zip' )
			.pipe( unzip.Extract( { path: 'inc' } ) )
			.on( 'error', ( err ) => {
				console.error( err );
			} )
			.on( 'finish', () => {
				resolve();
			} );
		}
	} );
};
