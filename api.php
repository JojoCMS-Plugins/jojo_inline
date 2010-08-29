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

Jojo::registerURI("inline/[file:(.*)$]", 'Jojo_Plugin_Inline');

$_provides['pluginClasses'] = array (
                                 'Jojo_Plugin_Inline' => 'Inline - Inline File downloader',
                                );