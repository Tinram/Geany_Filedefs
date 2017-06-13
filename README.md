
# Geany Editor Syntax Highlighting


## Purpose

My slightly eccentric, but personally essential, Geany colour schemes for a black editor background.


## Colours

Colours are inverted HTML codes, to conform with the 'inverted' editor background.


## Geany Version

Version 1.27 on Linux.


## Location

*/usr/share/geany/filetypes.x*


## Usage

Copy the required global filetypes files from:

*/usr/share/geany/*

to:

*~/.config/geany/filedefs/*


In each *~/.config/geany/filedefs/* file, copy and paster the `[styling=HTML]` section and colour codes.

Change the colour code values to your preference.  The *gpick* application in the Ubuntu repo has a decent colour code inverter (*Scheme generation*).

(Ignore the `[styling]` section if already present in the file.)

*Tools > Reload Configuration*

If duplicate definitions occur later in the same file, comment out or delete (else they will override earlier definitions).


### Older Geany Versions

Use `[styling]` not `[styling=HTML]`
