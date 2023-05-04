<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTestPipe2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'test-pipe-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 3v15a3 3 0 0 1 -6 0v-15" />   <path d="M9 12h6" />   <path d="M8 3h8" />
        SVG;
    }
}