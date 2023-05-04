<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMedal extends \Tabler\Icon {
    public static function getName(): string {
        return 'medal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 4v3m-4 -3v6m8 -6v6" />   <path d="M12 18.5l-3 1.5l.5 -3.5l-2 -2l3 -.5l1.5 -3l1.5 3l3 .5l-2 2l.5 3.5z" />
        SVG;
    }
}