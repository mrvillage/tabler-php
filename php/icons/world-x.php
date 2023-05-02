<?php
require_once('../Icon.php');

class IconWorldX extends Icon {
    public static function getName(): string {
        return 'world-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.929 13.131a9 9 0 1 0 -8.931 7.869" />   <path d="M3.6 9h16.8" />   <path d="M3.6 15h9.9" />   <path d="M11.5 3a17 17 0 0 0 0 18" />   <path d="M12.5 3a16.992 16.992 0 0 1 2.505 10.573" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}