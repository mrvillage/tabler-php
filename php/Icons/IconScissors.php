<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconScissors extends \Tabler\Icon {
    public static function getName(): string {
        return 'scissors';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M6 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M8.6 8.6l10.4 10.4" />   <path d="M8.6 15.4l10.4 -10.4" />
        SVG;
    }
}