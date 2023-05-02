<?php
require_once('../Icon.php');

class IconMoodCry extends Icon {
    public static function getName(): string {
        return 'mood-cry';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 10l.01 0" />   <path d="M15 10l.01 0" />   <path d="M9.5 15.25a3.5 3.5 0 0 1 5 0" />   <path d="M17.566 17.606a2 2 0 1 0 2.897 .03l-1.463 -1.636l-1.434 1.606z" />   <path d="M20.865 13.517a8.937 8.937 0 0 0 .135 -1.517a9 9 0 1 0 -9 9c.69 0 1.36 -.076 2 -.222" />
        SVG;
    }
}