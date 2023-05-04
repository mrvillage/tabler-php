<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLetterU extends \Tabler\Icon {
    public static function getName(): string {
        return 'letter-u';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 4v11a5 5 0 0 0 5 5h2a5 5 0 0 0 5 -5v-11" />
        SVG;
    }
}