Moodle theme selector (block)
=============================

A block to quickly change themes.  Great for theme developers!

[![Build Status](https://travis-ci.org/gjb2048/moodle-block_theme_selector.svg?branch=master)](https://travis-ci.org/gjb2048/moodle-block_theme_selector)

About
=====
 * copyright  &copy; 2015-onwards G J Barnard in respect to modifications of original code:
 *            https://github.com/johntron/moodle-theme-selector-block by John Tron, see:
              https://github.com/johntron/moodle-theme-selector-block/issues/1.
 * author     G J Barnard - http://about.me/gjbarnard and http://moodle.org/user/profile.php?id=442195
 * license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later

Required version of Moodle
==========================
This version works with:

Moodle version 2015051100.00 2.9 (Build: 20150511) and above within the 2.9 branch.
Moodle version 2015111600.00 3.0 (Build: 20151116) and above within the 3.0 branch.
Moodle version 2016052300.00 3.1 (Build: 20160523) and above within the 3.1 branch.
Moodle version 2016110800.00 3.2 (Build: 20161108) and above within the 3.2 branch.
Moodle version 2017051500.00 3.3 (Build: 20170515) and above within the 3.3 branch.
Moodle version 2017051500.00 3.4beta+ (Build: 20171027) and above within the 3.4 branch.
until the next release.

Please ensure that your hardware and software complies with 'Requirements' in 'Installing Moodle' on:
'docs.moodle.org/29/en/Installing_Moodle'
'docs.moodle.org/30/en/Installing_Moodle'
'docs.moodle.org/31/en/Installing_Moodle'
'docs.moodle.org/32/en/Installing_Moodle'
'docs.moodle.org/33/en/Installing_Moodle'
'docs.moodle.org/34/en/Installing_Moodle'
respectively.

Free Software
=============
The theme selector block is 'free' software under the terms of the GNU GPLv3 License, please see 'COPYING.txt'.

It can be obtained for free from:
https://github.com/gjb2048/moodle-block_theme_selector

You have all the rights granted to you by the GPLv3 license.  If you are unsure about anything, then the
FAQ - http://www.gnu.org/licenses/gpl-faq.html - is a good place to look.

If you reuse any of the code then I kindly ask that you make reference to the theme.

If you make improvements or bug fixes then I would appreciate if you would send them back to me by forking from
https://github.com/gjb2048/moodle-block_theme_selector and doing a 'Pull Request' so that the rest of the
Moodle community benefits.

Installation
============
1. Follow [Moodle's instructions for installing plugins](http://docs.moodle.org/29/en/Installing_plugins#Installation).
2. Turn editing mode on.
3. Go to Site administration -> Plugins -> Blocks -> Theme selector and decide if you want URL switching or not.
   When URL Switching is off only users with the 'moodle/site:config' capability will be able to change themes.
   Theme changes are permenant for all.
   When URL Switching is on everybody can change the theme but it will only be for them.  The set site theme will
   remain as set by a user with 'moodle/site:config' capability.
4. Add the "Theme selector" block wherever you like.
5. The selector will show the current theme as the one selected.

Version Information
===================
See Changes.md

Me
==
G J Barnard MSc. BSc(Hons)(Sndw). MBCS. CEng. CITP. PGCE.
Moodle profile: http://moodle.org/user/profile.php?id=442195.
Web profile   : http://about.me/gjbarnard
