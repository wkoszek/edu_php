<?php
declare(strict_types=1);
error_reporting(-1);

function ret_maybe_null() : ?string {
	if (FALSE) {
		return "normal string";
	} else {
		return null;
	}
}

function get_sample_str() : string {
	return ret_maybe_null();
}

function main() {
	print get_sample_str();
}

main();

?>
