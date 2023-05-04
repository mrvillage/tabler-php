<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRollerSkating extends Icon {
    public static function getName(): string {
        return 'roller-skating';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.905 5h3.418a1 1 0 0 1 .928 .629l1.143 2.856a3 3 0 0 0 2.207 1.83l4.717 .926a2.084 2.084 0 0 1 1.682 2.045v.714a1 1 0 0 1 -1 1h-13.895a1 1 0 0 1 -1 -1.1l.8 -8a1 1 0 0 1 1 -.9z" />   <path d="M8 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M16 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}