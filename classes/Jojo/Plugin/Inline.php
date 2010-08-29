<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2008-2010 Michael Cochrane <code@mikenz.geek.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Michael Cochrane <code@mikenz.geek.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 * @package jojo_inline
 */

class Jojo_Plugin_Inline extends Jojo_Plugin {
    /**
     * Serve an file from the download directory with an inline content disposition
     */
    function __construct()
    {
        /* Read only session */
        define('_READONLYSESSION', true);

        /* Get requested filename */
        $file = Jojo::getFormData('file', false);

        /* Check file name is set */
        if (!$file) {
            /* No filename, 404 */
            include(_BASEPLUGINDIR . '/jojo_core/404.php');
            exit;
        }

        $file = _DOWNLOADDIR . '/' . Jojo::relative2absolute(urldecode($file), '/');
        if (!file_exists($file)) {
            /* Not found, 404 */
            include(_BASEPLUGINDIR . '/jojo_core/404.php');
            exit;
        }

        Jojo::runHook('jojo_inline:downloadFile', array('filename' => $file));

        /* Send header */
        header('Content-Type: ' . Jojo::getMimeType($file));
        header('Content-Length: ' . filesize($file));
        header('Content-disposition: inline; filename="' . basename($file) . '"');
        header('Content-Transfer-Encoding: binary');
        header('Pragma: public');
        header('Cache-Control: public, max-age=28800');
        header('Expires: ' . date('D, d M Y H:i:s \G\M\T', time() + 28800));

        /* Send Content */
        readfile($file, 'rb');
        exit;
    }
}