<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconOvalFilled extends Icon {
    public static function getName(): string {
        return 'oval-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 2c3.972 0 7 4.542 7 10s-3.028 10 -7 10c-3.9 0 -6.89 -4.379 -6.997 -9.703l-.003 -.297l.003 -.297c.107 -5.323 3.097 -9.703 6.997 -9.703z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}