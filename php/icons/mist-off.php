<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMistOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'mist-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5h9" />   <path d="M3 10h7" />   <path d="M18 10h1" />   <path d="M5 15h5" />   <path d="M14 15h1m4 0h2" />   <path d="M3 20h9m4 0h3" />   <path d="M3 3l18 18" />
        SVG;
    }
}