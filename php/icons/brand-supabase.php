<?php
require_once('../Icon.php');

class IconBrandSupabase extends Icon {
    public static function getName(): string {
        return 'brand-supabase';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 14h8v7l8 -11h-8v-7z" />
        SVG;
    }
}