<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGolf extends \Tabler\Icon {
    public static function getName(): string {
        return 'golf';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18v-15l7 4l-7 4" />   <path d="M9 17.67c-.62 .36 -1 .82 -1 1.33c0 1.1 1.8 2 4 2s4 -.9 4 -2c0 -.5 -.38 -.97 -1 -1.33" />
        SVG;
    }
}