<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTestPipe extends Tabler\Icon {
    public static function getName(): string {
        return 'test-pipe';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124" />   <path d="M7 13h8" />   <path d="M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z" />   <path d="M15 3l6 6" />
        SVG;
    }
}