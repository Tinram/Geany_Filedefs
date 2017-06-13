# For complete documentation of this file, please see Geany's main documentation

[styling=HTML]
# foreground;background;bold;italic
default=0x000000;0xffffff;false;false
comment=0x8EA9B5;0xffffff;false;false
commentline=0x8EA9B5;0xffffff;false;false
commentdoc=0x8EA9B5;0xffffff;true;false
number=0x33FFFF;0xffffff;true;false
word=0xCCCC22;0xffffff;true;false
word2=0xC38C42;0xffffff;true;false
string=0x666666;0xffffff;false;false
character=0x888888;0xffffff;false;false
uuid=extra
preprocessor=preprocessor
operator=0xCC9977;0xffffff;true;false
identifier=0x5577DD;0xffffff;false;false
stringeol=0x000000;0xe0c0e0;false;false


#[styling=C]

[keywords]
# all items must be in one line
primary=break case catch const continue default delete do each else false finally for function get if in Infinity instanceof let NaN new null return set switch this throw true try typeof undefined var void while with yield prototype
secondary=Array Boolean Date Function Math Number Object String RegExp EvalError Error RangeError ReferenceError SyntaxError TypeError URIError prototype decodeURI decodeURIComponent encodeURI encodeURIComponent eval isFinite isNaN parseFloat parseInt

[settings]
# default extension used when saving files
extension=js

# MIME type
mime_type=application/javascript

# the following characters are these which a "word" can contains, see documentation
#wordchars=_abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789

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

[indentation]
#width=4
# 0 is spaces, 1 is tabs, 2 is tab & spaces
#type=1

[build-menu]
# %f will be replaced by the complete filename
# %e will be replaced by the filename without extension
# (use only one of it at one time)
FT_02_LB=_Lint
FT_02_CM=jshint "%f"
FT_02_WD=
error_regex=([^:]+): line ([0-9]+), col ([0-9]+)
