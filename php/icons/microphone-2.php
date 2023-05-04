<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMicrophone2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'microphone-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 12.9a5 5 0 1 0 -3.902 -3.9" />   <path d="M15 12.9l-3.902 -3.899l-7.513 8.584a2 2 0 1 0 2.827 2.83l8.588 -7.515z" />
        SVG;
    }
}