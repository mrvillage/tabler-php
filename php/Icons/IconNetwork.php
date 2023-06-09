<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconNetwork extends \Tabler\Icon {
    public static function getName(): string {
        return 'network';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 9m-6 0a6 6 0 1 0 12 0a6 6 0 1 0 -12 0" />   <path d="M12 3c1.333 .333 2 2.333 2 6s-.667 5.667 -2 6" />   <path d="M12 3c-1.333 .333 -2 2.333 -2 6s.667 5.667 2 6" />   <path d="M6 9h12" />   <path d="M3 19h7" />   <path d="M14 19h7" />   <path d="M12 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 15v2" />
        SVG;
    }
}