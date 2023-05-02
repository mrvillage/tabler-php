<?php
require_once(__DIR__ . '../Icon.php');

class IconBallFootball extends Icon {
    public static function getName(): string {
        return 'ball-football';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 7l4.76 3.45l-1.76 5.55h-6l-1.76 -5.55z" />   <path d="M12 7v-4m3 13l2.5 3m-.74 -8.55l3.74 -1.45m-11.44 7.05l-2.56 2.95m.74 -8.55l-3.74 -1.45" />
        SVG;
    }
}