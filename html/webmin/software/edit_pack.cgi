#!/usr/bin/perl
# edit_pack.cgi
# Displays the details of an existing package, with links to uninstall and
# other options

require './software-lib.pl';
&ReadParse();
@pinfo = &package_info($in{'package'}, $in{'version'});
$pinfo[0] || &error($text{'edit_egone'});
&ui_print_header(undef, $text{'edit_title'}, "", "edit_pack");

@pinfo = &show_package_info($in{'package'}, $in{'version'}, 1);
print &ui_buttons_start();

# Show button to list files, if supported
if (!$pinfo[8]) {
	print &ui_buttons_row("list_pack.cgi",
		$text{'edit_list'},
		$text{'edit_listdesc'},
		&ui_hidden("package", $pinfo[0]).
		&ui_hidden("version", $pinfo[4]).
		&ui_hidden("search", $in{'search'}));
	}

# Show button to un-install (if possible)
if (!$pinfo[7]) {
	print &ui_buttons_row("delete_pack.cgi",
		$text{'edit_uninst'},
		$text{'edit_uninstdesc'},
		&ui_hidden("package", $pinfo[0]).
		&ui_hidden("version", $pinfo[4]).
		&ui_hidden("search", $in{'search'}));
	}

print &ui_buttons_end();

if ($in{'search'}) {
	&ui_print_footer("search.cgi?search=$in{'search'}", $text{'search_return'});
	}
else {
	&ui_print_footer("tree.cgi#$pinfo[1]", $text{'index_treturn'});
	}


