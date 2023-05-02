<?php
require_once(__DIR__ . '/../Icon.php');

class IconBallVolleyball extends Icon {
    public static function getName(): string {
        return 'ball-volleyball';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 12a8 8 0 0 0 8 4" />   <path d="M7.5 13.5a12 12 0 0 0 8.5 6.5" />   <path d="M12 12a8 8 0 0 0 -7.464 4.928" />   <path d="M12.951 7.353a12 12 0 0 0 -9.88 4.111" />   <path d="M12 12a8 8 0 0 0 -.536 -8.928" />   <path d="M15.549 15.147a12 12 0 0 0 1.38 -10.611" />
        SVG;
    }
}