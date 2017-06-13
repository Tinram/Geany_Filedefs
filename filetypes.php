# For complete documentation of this file, please see Geany's main documentation
[styling=HTML]

php_default=0x7FD8AC;0xffffff;true;false
php_simplestring=0x888888;0xffffff;false;false
php_hstring=0x666666;0xffffff;false;false
php_number=0x33FFFF;0xffffff;false;false
php_word=0x7FFF7F;0xffffff;true;false
# mute purple: 0x9CFF7E
php_variable=0x59B8F1;0xffffff;true;false
# green: 0xFF94F5
php_comment=0x8EA9B5;0xffffff;false;true
php_commentline=0x8EA9B5;0xffffff;false;false
php_operator=0xCC9977;0xffffff;true;false
php_hstring_variable=0x33FFFF;0xffffff;false;false
php_complex_variable=0x105010;0xffffff;false;false

# foreground;background;bold;italic
html_default=0x222211;0xffffff;false;false
html_tag=0xAA9922;0xffffff;false;false
html_tagunknown=0xff0000;0xffffff;false;false
html_attribute=0xAA9922;0xffffff;false;false
html_attributeunknown=0xff0000;0xffffff;false;false
html_number=0x800080;0xffffff;false;false
html_doublestring=0x999977;0xffffff;false;false
html_singlestring=0x999977;0xffffff;false;false
html_other=0xAA9922;0xffffff;false;false
html_comment=0x666666;0xffffff;false;false
html_entity=0x800080;0xffffff;false;false
html_tagend=0x000080;0xffffff;false;false
# <?
html_xmlstart=0x000099;0xf0f0f0;false;false
# ?>
html_xmlend=0x000099;0xf0f0f0;false;false
# <script
html_script=0x000080;0xf0f0f0;false;false
# <% ... %>
html_asp=0x004f4f;0xf0f0f0;false;false
# <%@ ... %>
html_aspat=0x004f4f;0xf0f0f0;false;false
html_cdata=0x660099;0xffffff;false;false
html_question=0x33FFFF;0xffffff;true;false
	# php tag
html_value=0x660099;0xffffff;false;false
html_xccomment=0x660099;0xffffff;false;false

[keywords=HTML]


[lexer_properties]
phpscript.mode=1

[settings]
# default extension used when saving files
extension=php

# MIME type
mime_type=application/x-php

# the following characters are these which a "word" can contains, see documentation
#wordchars=_abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789

# these comments are used for PHP, the comments used in HTML are in filetypes.xml
# single comments, like # in this file
comment_single=//
# multiline comments
comment_open=/*
comment_close=*/

# set to false if a comment character/string should start at column 0 of a line, true uses any
# indentation of the line, e.g. setting to true causes the following on pressing CTRL+d
	#command_example();
# setting to false would generate this
#	command_example();
# This setting works only for single line comments
comment_use_indent=true

# context action command (please see Geany's main documentation for details)
context_action_cmd=

# if this setting is set to true, a new line after a line ending with an
# unclosed tag will be automatically indented
xml_indent_tags=true

[indentation]
#width=4
# 0 is spaces, 1 is tabs, 2 is tab & spaces
#type=1

[build_settings]
# %f will be replaced by the complete filename
# %e will be replaced by the filename without extension
# (use only one of it at one time)
compiler=php -l "%f"
run_cmd=php "%f"

# use can also use something like this, to view your PHP or HTML files through a browser and webserver
#run_cmd=firefox http://localhost/test_site/%f
