module.exports = {
	globDirectory: '.',
	globPatterns: [
		'**/*.{php,png,json}'
	],
	swDest: 'sw.js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};