const path = require( 'path' ),
	copy = require( 'recursive-copy' ),
	wpTextdomain = require( 'wp-textdomain' ),
	headerUpdate = require( 'wp-header-update' ),
	getBGTFW = require( './modules/install-bgtfw.js' ),
	zip = require( './modules/zip.js' ),
	wpPot = require( 'wp-pot' ),
	rimraf = require( 'rimraf' );

let args = process.argv.slice( 2 );

// No textdomain or version.
if ( ! args || ! args.length ) {
	console.log( '' );
	console.log( 'Invalid amount arguments passed for .zip creation!' );
	console.log( '' );
	console.log( 'Usage:' );
	console.log( '' );
	console.log( '\t$ node build-zip.js textdomain version' );
	console.log( '' );
	process.exit( 1 );
}

// No version entered.
if ( args.length < 2 ) {
	console.log( '' );
	console.log( 'You must enter a version to build!' );
	console.log( '' );
	console.log( 'Usage:' );
	console.log( '' );
	console.log( '\t$ node build-zip.js textdomain version' );
	console.log( '' );
	process.exit( 1 );
}

// Theme directory ran in.
const themeDir = path.resolve( __dirname, '..' );

// New textdomain.
const domain = args[0];
const version = args[1];
const tempDir = `../${ domain }-zip-building/${ domain }`;

getBGTFW().then( () => {
	rimraf( path.resolve( tempDir, '..' ), () => {
		let options = {
			overwrite: true,
			expand: false,
			dot: false,
			junk: false,
			filter: [
				'**/*',
				`!*.zip`,
				`!codesniffer.ruleset.xml`,
				`!package.json`,
				`!README.md`,
				`!yarn.lock`,
				`!bin`,
				`!bin/**`,
				`!node_modules`,
				`!node_modules/**`
			]
		};

		copy( themeDir, tempDir, options ).then( () => {
			( async () => {
				await headerUpdate( 'Version', version, `${ tempDir }/style.css` );
				await headerUpdate( 'Text Domain', domain, `${ tempDir }/style.css` );
				await headerUpdate( 'Theme Name', domain.charAt( 0 ).toUpperCase() + domain.slice( 1 ), `${ tempDir }/style.css` );
				await headerUpdate( 'Theme URI', `https://www.boldgrid.com/themes/${ domain }`, `${ tempDir }/style.css` );
				await fixTextDomains();
			} )().then( () => generatePot() )
				.then( () => zipTheme() )
				.catch( console.error );
		} ).catch( console.error );
	} );
} ).catch( console.error );

const fixTextDomains = async () => {
	wpTextdomain( `${ tempDir }/**/*.php`, {
		domain: [ domain, 'kirki' ],
		fix: true,
		force: true
	} );
}

const generatePot = async () => {
	console.log( 'Generating translations file...' );
	wpPot( {
		destFile: `${ tempDir }/languages/${ domain }.pot`,
		domain: domain,
		bugReport: `https://github.com/BoldGrid/${ domain }/issues`,
		team: 'The BoldGrid Team <support@boldgrid.com>'
	} );
}

const zipTheme = async() => {
	zip( {
		name: domain,
		source: `${ domain }/**`,
		globOpts: {
			cwd: path.resolve( tempDir, '..' ) + '/',
			dot: false,
			ignore: [
				`${ domain }/*.zip`,
				`${ domain }/codesniffer.ruleset.xml`,
				`${ domain }/package.json`,
				`${ domain }/README.md`,
				`${ domain }/yarn.lock`,
				`${ domain }/bin`,
				`${ domain }/bin/**`,
				`${ domain }/node_modules`,
				`${ domain }/node_modules/**`
			]
		}
	} );
}
