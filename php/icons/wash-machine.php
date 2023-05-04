<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWashMachine extends \Tabler\Icon {
    public static function getName(): string {
        return 'wash-machine';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />   <path d="M12 14m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M8 6h.01" />   <path d="M11 6h.01" />   <path d="M14 6h2" />   <path d="M8 14c1.333 -.667 2.667 -.667 4 0c1.333 .667 2.667 .667 4 0" />
        SVG;
    }
}