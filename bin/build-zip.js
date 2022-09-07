const path = require( 'path' ),
	copy = require( 'recursive-copy' ),
	wpTextdomain = require( 'wp-textdomain' ),
	headerUpdate = require( 'wp-header-update' ),
	updateName = require( './modules/update-name' ),
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
const localBgtfw = args[2] && 'local' === args[2] ? true : false;
const themeName = domain.charAt( 0 ).toUpperCase() + domain.slice( 1 );
const tempDir = `../${ domain }-zip-building/${ domain }`;

getBGTFW( localBgtfw ).then( () => {
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
				await headerUpdate( 'Theme Name', themeName, `${ tempDir }/style.css` );
				await headerUpdate( 'Theme URI', `https://www.boldgrid.com/themes/${ domain }`, `${ tempDir }/style.css` );
				await headerUpdate( 'Stable Tag', version, `${ tempDir }/readme.txt` );
				await updateNames();
				await fixTextDomains();
				await generatePot();
			} )()
				.then( () => zipTheme() )
				.catch( console.error );
		} ).catch( console.error );
	} );
} ).catch( console.error );

const fixTextDomains = async () => {
	return new Promise( ( resolve, reject ) => {
		try {
			wpTextdomain( `${ tempDir }/**/*.php`, {
				domain: [ domain, 'kirki' ],
				fix: true,
				force: true
			} );
			resolve();
		} catch( e ) {
			console.error( e );
			reject( e );
		}
	} );
}

const updateNames = async() => {
	const config = {
		globOpts: {
			cwd: path.resolve( tempDir, '..' ) + '/',
			dot: false,
			ignore: [
				`${ domain }/inc/boldgrid-theme-framework/**/*`,
				`${ domain }/vendor/**/*`,
				`${ domain }/woocommerce/**/*`
			]
		}
	};

	const task1 = updateName( `${ path.resolve( tempDir ) }/**/*.php`, themeName, config );
	const task2 = updateName( `${ path.resolve( tempDir ) }/style.css`, themeName, config );
	const task3 = updateName( `${ path.resolve( tempDir ) }/rtl.css`, themeName, config );
	const task4 = updateName( `${ path.resolve( tempDir ) }/readme.txt`, themeName, config )

	return {
		result1: await task1,
		result2: await task2,
		result3: await task3,
		result4: await task4
	}
}

const generatePot = async () => {
	return new Promise( ( resolve, reject ) => {
		try {
			console.log( 'Generating translations file...' );
			wpPot( {
				destFile: `${ path.resolve( tempDir ) }/languages/${ domain }.pot`,
				domain: domain,
				bugReport: `https://github.com/BoldGrid/${ domain }/issues`,
				team: 'The BoldGrid Team <support@boldgrid.com>',
				src: `${path.resolve( tempDir, '..' )}/${domain}/**/*.php`,
				relativeTo: `${path.resolve( tempDir, '..' )}/${domain}/`
			} );
			resolve();
		} catch( e ) {
			console.error( e );
			reject( e );
		}
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
