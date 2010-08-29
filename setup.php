<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2010 Mike Cochrane <code@mikenz.geek.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Michael Cochrane <mikec@jojocms.org>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 * @package jojo_inline
 */

if (!Jojo::selectRow("SELECT pageid FROM {page} WHERE pg_link = 'Jojo_Plugin_Inline'")) {
    echo "Adding <b>Inline file Handler</b> Page<br />";
    Jojo::insertQuery("INSERT INTO {page} SET pg_title = 'Inline file Handler', pg_link = 'Jojo_Plugin_Inline', pg_url = 'inline', pg_parent= ?, pg_order=0, pg_mainnav='no', pg_footernav='no', pg_sitemapnav='no', pg_xmlsitemapnav='no', pg_index='no', pg_body = ''", array($_NOT_ON_MENU_ID));
}
