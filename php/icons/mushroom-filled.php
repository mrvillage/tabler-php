<?php
require_once('../Icon.php');

class IconMushroomFilled extends Icon {
    public static function getName(): string {
        return 'mushroom-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 15v4a3 3 0 0 1 -5.995 .176l-.005 -.176v-4h6zm-10.1 -2a1.9 1.9 0 0 1 -1.894 -1.752l-.006 -.148c0 -5.023 4.027 -9.1 9 -9.1s9 4.077 9 9.1a1.9 1.9 0 0 1 -1.752 1.894l-.148 .006h-14.2z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}