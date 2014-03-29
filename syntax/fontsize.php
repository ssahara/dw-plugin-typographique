<?php
/**
 * DokuWiki Plugin Typographique; Syntax typographique fontsize
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Satoshi Sahara <sahara.satoshi@gmail.com>
 */

require_once(dirname(__FILE__).'/typography.php');

class syntax_plugin_typographique_fontsize extends syntax_plugin_typographique_typography {

    protected $entry_pattern = '<fs(?: .+?)?>(?=.+?</fs>)';
    protected $exit_pattern  = '</fs>';

}
