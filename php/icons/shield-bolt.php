<?php
require_once('../Icon.php');

class IconShieldBolt extends Icon {
    public static function getName(): string {
        return 'shield-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.342 20.566c-.436 .17 -.884 .315 -1.342 .434a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3a12 12 0 0 1 .117 6.34" />   <path d="M19 16l-2 3h4l-2 3" />
        SVG;
    }
}