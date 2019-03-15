const path = require( 'path' ),
	fs = require( 'fs' ).promises,
	shell = require( 'shelljs' ),
	wpTextdomain = require( 'wp-textdomain' ),
	headerUpdate = require( 'wp-header-update' ),
	getBGTFW = require( './modules/install-bgtfw.js' ),
	zip = require( './modules/zip.js' );

const configs = {
	textdomain: 'crio',
	themeName: 'Crio',
	authorUri: 'https://www.boldgrid.com/themes/crio'
};
let args = process.argv.slice( 2 );

if ( ! args ) {
	console.log( 'You must enter path to file to update version number in.' );
	process.exit( 1 );
}

let file = path.resolve( args[0] ),
	version = args[1];

async function setConfigs() {
	let cmds = [
		'git checkout dev'
		`git config --global user.email ${ process.env.BGTFW_AUTO_UPDATE_AUTHOR }`,
		`git config --global user.name ${ process.env.BGTFW_AUTO_UPDATE_EMAIL }`,
		`yarn config set version-tag-prefix ""`,
		'yarn config set version-git-message "Version %s Release"',
		`yarn config set version-git-tag false`,
	];

	cmds.map( cmd => {
		if ( shell.exec( cmd ).code !== 0 ) {
			console.log( `Failed to autodeploy when running ${ cmd }` );
			shell.exit( 1 );
			process.exitCode = 1;
		}
	} );
}
getBGTFW().then( () => {
	( async () => {
		try {
			await setConfigs();
			await headerUpdate( 'Version', version, 'style.css' );
			await headerUpdate( 'Text Domain', configs.textdomain, 'style.css' );
			await headerUpdate( 'Theme Name', configs.themeName, 'style.css' );
			await headerUpdate( 'Theme URI', configs.authorUri, 'style.css' );
		} catch( err ) {
			console.error( err );
		}

		wpTextdomain( '**/*.php', {
			domain: [ configs.textdomain, 'kirki' ],
			fix: true,
			force: true
		} );
	} )().then( () => {
		fs.renameSync( '../prime', `../${ configs.textdomain }` );
		zipTheme();
	} );
} ).catch( console.error );

const zipTheme = async () => {
	zip( {
		name: configs.textdomain,
		source: `../${ configs.textdomain }/**`,
		globOpts: {
			dot: false,
			ignore: [
				`../${ configs.textdomain }/crio.zip`,
				`../${ configs.textdomain }/codesniffer.ruleset.xml`,
				`../${ configs.textdomain }/package.json`,
				`../${ configs.textdomain }/README.md`,
				`../${ configs.textdomain }/readme.txt`,
				`../${ configs.textdomain }/yarn.lock`,
				`../${ configs.textdomain }/bin`,
				`../${ configs.textdomain }/bin/**`,
				`../${ configs.textdomain }/node_modules`,
				`../${ configs.textdomain }/node_modules/**`
			]
		}
	} );
}
