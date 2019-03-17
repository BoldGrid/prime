const path = require( 'path' ),
	fs = require( 'fs' ).promises,
	shell = require( 'shelljs' ),
	wpTextdomain = require( 'wp-textdomain' ),
	headerUpdate = require( 'wp-header-update' ),
	getBGTFW = require( './modules/install-bgtfw.js' ),
	zip = require( './modules/zip.js' ),
	updatePhpdocs = require( './modules/update-phpdocs.js' );

getBGTFW().then( () => {
	( async () => {
		try {
			await headerUpdate( 'Version', version, 'style.css' );
			await headerUpdate( 'Text Domain', 'crio', 'style.css' );
			await headerUpdate( 'Theme Name', 'Crio', 'style.css' );
			await headerUpdate( 'Theme URI', 'https://www.boldgrid.com/themes/crio', 'style.css' );
		} catch ( err ) {
			console.error( err );
		}

		wpTextdomain( '**/*.php', {
			domain: [ 'crio', 'kirki' ],
			fix: true,
			force: true
		} );

		updatePhpdocs( '**/*.php', { ...phpdocConfig, ...{
			name: 'license',
			value: 'GNU General Public License, version 3'
		} } );

		updatePhpdocs( '**/*.php', { ...phpdocConfig, ...{
			name: 'package',
			value: 'Crio'
		} } );

	} )().then( () => {
		( async () => {
			await tag().then( () => zipTheme() ).catch( console.error );
		} );
	} );
} ).catch( console.error );

const phpdocConfig = {
	fix: true,
	force: true,
	globOpts: {
		cwd: path.resolve( __dirname + '/..' ),
		ignore: [
			'inc/boldgrid-theme-framework/**/*',
			'vendor/**/*',
			'woocommerce/**/*'
		]
	}
};

const tag = async () => {
	const cmds = [
		`yarn version --new-version ${ process.env.BGTFW_AUTO_UPDATE_TAG } --no-git-tag-version --no-commit-hooks`,
		`git commit -am "Updating version to ${ process.env.BGTFW_AUTO_UPDATE_TAG }"`,
		'git push origin dev',
		'git checkout master',
		`git pull origin dev`,
		'git push origin master',
		`git tag -a ${ process.env.BGTFW_AUTO_UPDATE_TAG } -m "Version ${ process.env.BGTFW_AUTO_UPDATE_TAG } Release"`,
		`git push origin ${ process.env.BGTFW_AUTO_UPDATE_TAG } 2>&1`
	];

	// Execute tagging.
	cmds.map( cmd => {
		if ( shell.exec( cmd ).code !== 0 ) {
			console.log( `Failed to autodeploy when running ${ cmd }` );
			shell.exit( 1 );
			process.exitCode = 1;
		}
	} );
}

const zipTheme = async () => {
	zip( {
		name: 'crio',
		source: '../prime/**',
		globOpts: {
			dot: false,
			ignore: [
				'../prime/crio.zip',
				'../prime/codesniffer.ruleset.xml',
				'../prime/package.json',
				'../prime/README.md',
				'../prime/yarn.lock',
				'../prime/bin',
				'../prime/bin/**',
				'../prime/node_modules',
				'../prime/node_modules/**'
			]
		}
	} );
}
