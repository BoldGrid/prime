const got = require( 'got' ),
	unzip = require( 'unzip-stream' ),
	pkgDir = require( 'pkg-dir' );

module.exports = async () => {
	const rootDir = await pkgDir( __dirname );
	return new Promise( (resolve, reject) => {
		got.stream( 'https://github.com/BoldGrid/boldgrid-theme-framework/releases/latest/download/bgtfw.zip' )
			.pipe( unzip.Extract( { path: 'inc' } ) )
			.on( 'error', ( err ) => {
				console.error( err );
			} )
			.on( 'finish', () => {
				resolve();
			} );
	} );
};
