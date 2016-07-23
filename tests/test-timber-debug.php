<?php


class TestTimberDebug extends Timber_UnitTestCase {

	function testCallingPHPFile() {
		add_filter('timber/calling_php_file', function($file) {
			$this->assertEquals('/srv/www/timber/tests/test-timber-debug.php', $file);
		});
		Timber::compile('assets/output.twig');

	}
}