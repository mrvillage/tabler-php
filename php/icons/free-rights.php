<?php
require_once('../Icon.php');

class IconFreeRights extends Icon {
    public static function getName(): string {
        return 'free-rights';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M13.867 9.75c-.246 -.48 -.708 -.769 -1.2 -.75h-1.334c-.736 0 -1.333 .67 -1.333 1.5c0 .827 .597 1.499 1.333 1.499h1.334c.736 0 1.333 .671 1.333 1.5c0 .828 -.597 1.499 -1.333 1.499h-1.334c-.492 .019 -.954 -.27 -1.2 -.75" />   <path d="M12 7v2" />   <path d="M12 15v2" />   <path d="M6 6l1.5 1.5" />   <path d="M16.5 16.5l1.5 1.5" />
        SVG;
    }
}