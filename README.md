# FAQ

This repo contains a wordpress theme for [faq.hoccer.com](http://faq.hoccer.com) and guidelines.

The current wordpress installation requires the [WPML](http://wpml.org/) plugin for multilanguage support. Currently english and german are active languages.

## Preview

[faq.hoccer.com](http://faq.hoccer.com) is only a index that lists all pages with their permalinks and shouldn’t be used anywhere.

The page header (title and backlink) and language switch at the bottom are only visible on desktop browsers. On mobile they will be filtered by a their useragents.

## Edit a FAQ

A FAQ is a simple wordpress page. The "Tutorial" contains anchors in it’s titles and icons by an icon-font. Make sure to edit pages in wordpress editors text-mode. The icon-font is "Font Awesome 4.1.0". All usable icons are listed [here](http://fortawesome.github.io/Font-Awesome/icons/).

## Add a new FAQ

When adding a new FAQ page make sure that the title is named ````FAQ```` and the permalink is ````faq-xo-WHITELABELNAME````.

Via the language box you can add a translation (currently only german is active). If you edit the translation of the page make sure that the permalink is the same ````faq-xo-WHITELABELNAME````.

The baseurl will be localized automatically. The default english version is ````http://faq.hoccer.com/faq-xo-WHITELABEL```` and the german version will be ````http://faq.hoccer.com/de/faq-xo-WHITELABEL````.