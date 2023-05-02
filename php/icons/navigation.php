<?php
require_once(__DIR__ . '/../Icon.php');

class IconNavigation extends Icon {
    public static function getName(): string {
        return 'navigation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18.5l7.265 2.463a.535 .535 0 0 0 .57 -.116a.548 .548 0 0 0 .134 -.572l-7.969 -17.275l-7.97 17.275a.547 .547 0 0 0 .135 .572a.535 .535 0 0 0 .57 .116l7.265 -2.463" />
        SVG;
    }
}