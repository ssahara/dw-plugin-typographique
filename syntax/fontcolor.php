<?php
/**
 * DokuWiki Plugin Typographique; Syntax typographique fontcolor
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Satoshi Sahara <sahara.satoshi@gmail.com>
 */

require_once(dirname(__FILE__).'/typography.php');

class syntax_plugin_typographique_fontcolor extends syntax_plugin_typographique_typography {

    protected $entry_pattern = '<fc(?: .+?)?>(?=.+?</fc>)';
    protected $exit_pattern  = '</fc>';

}
