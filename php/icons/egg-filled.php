<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEggFilled extends Icon {
    public static function getName(): string {
        return 'egg-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.002 2c-4.173 -.008 -8.002 6.058 -8.002 12.083c0 4.708 3.25 7.917 8 7.917c4.727 -.206 8 -3.328 8 -7.917c0 -6.02 -3.825 -12.075 -7.998 -12.083z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}