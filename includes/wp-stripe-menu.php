<?php

class Stripe_Express_Menu {
    function register_menu() {
        $svg_img = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTk5IiBoZWlnaHQ9IjE5OSIgdmlld0JveD0iMCAwIDE5OSAxOTkiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMCA5OS4yNDgxQzAgNDQuNDM3IDQ0LjQyMzkgMCA5OS4yMTg4IDBDMTU0LjAxNCAwIDE5OC40MzggNDQuNDM3IDE5OC40MzggOTkuMjQ4MUMxOTguNDM4IDE1NC4wNTkgMTU0LjAxNCAxOTguNDk2IDk5LjIxODggMTk4LjQ5NkM0NC40MjM5IDE5OC40OTYgMCAxNTQuMDU5IDAgOTkuMjQ4MVpNMTEzLjI3MiAxNDcuNTczQzEyMS4xMTEgMTQ1LjgyNyAxMjcuODMxIDE0Mi4zNzYgMTMyLjk5MiAxMzcuMjU4QzE1MC4xNTIgMTIwLjI0MSAxNDQuOTczIDEwMy42NjEgMTIxLjc0NCA5My4yNTc2QzExNS45NDkgOTAuNjYyIDEwOS44NzIgODguNjIzMyAxMDMuNzcgODYuNTc2QzEwMy4xNTYgODYuMzcgMTAyLjU0MSA4Ni4xNjQgMTAxLjkyNyA4NS45NTczQzk4LjA4MDggODQuNjQ4IDk0LjMzMTYgODMuMTQwNCA5MS4wNjkzIDgwLjk5NzlDODQuNTkzNSA3Ni43OTIzIDg1LjgxMDcgNjkuOTY4MSA5My40MDY1IDY3LjI3MDJDOTUuNTQ4OCA2Ni41MTY0IDk3Ljc4ODYgNjYuMjc4MyAxMDAuMDc3IDY2LjE1OTNDMTAxLjA1MSA2Ni4xMTk2IDEwMi4wNzMgNjYuMDc5OSAxMDMuMDQ3IDY2LjA3OTlDMTEwLjc0IDY2LjA3OTkgMTE4LjA5MyA2Ny40Mjg5IDEyNS4xMDQgNzAuMjA2MkMxMjYuNDY3IDcwLjc2MTYgMTI3LjUzOSA3MS4wMzk0IDEyOC40MTUgNzEuMDM5NEMxMjkuOTczIDcxLjAzOTQgMTMwLjgwMSA3MC4wNDc1IDEzMS42NzcgNjcuOTA1QzEzMi42OCA2NS4zMDg0IDEzMy42MDMgNjIuNjY5IDEzNC41MjUgNjAuMDMzOUMxMzQuODU3IDU5LjA4NTUgMTM1LjE4OSA1OC4xMzc3IDEzNS41MjQgNTcuMTkyNkMxMzYuNCA1NC43NzI1IDEzNS4zMjkgNTMuMTg1NCAxMzIuNTU0IDUyLjE5MzZDMTI3LjQ5IDUwLjM2ODUgMTIyLjI4IDQ5LjA1OTIgMTE2Ljc3OCA0OC4zNDVDMTEyLjk0MiA0Ny44NTYgMTExLjE2MiA0Ny42MjkxIDExMC4zMjggNDYuNjIwMUMxMDkuNjA2IDQ1Ljc0NjIgMTA5LjU5NCA0NC4yODU4IDEwOS41NzIgNDEuNTYwNUwxMDkuNTcyIDQxLjU1NTRDMTA5LjUyMyAzMy41ODU3IDEwOS41MjEgMzMuMjY4NCAxMDAuNDY3IDMzLjI2ODRIOTkuMzQ2N0g5Ni41NzEzSDk0LjkxNTlDOTAuMTQ0MiAzMy4zODc0IDg5LjM2NTEgMzQuMDYxOSA4OS4yMTkxIDM3Ljk1MDFDODkuMTQ2IDM5LjI4OTggODkuMTU1MiA0MC42MDcxIDg5LjE2NDMgNDEuOTE4OUM4OS4xNjczIDQyLjM1NTMgODkuMTcwNCA0Mi43OTExIDg5LjE3MDQgNDMuMjI2OUM4OS4xNzA0IDQ4LjMzMTMgODkuMTIyNyA0OC4zNDUzIDgzLjIyMjUgNTAuMDc1NkM4My4xNjA3IDUwLjA5MzcgODMuMDk4NCA1MC4xMTE5IDgzLjAzNTQgNTAuMTMwNEM2OC4yODIxIDU0LjQ5NDcgNTkuMTc3IDYyLjY2NzkgNTguMjAzMiA3NS43NjA3QzU3LjMyNjcgODcuMzQ1OSA2NC43Mjc3IDk1LjE2MiA3Ni40MTM1IDEwMC44NzVDODEuMzc5MyAxMDMuMzA5IDg2LjY5MiAxMDUuMDQ1IDkyLjAxNyAxMDYuNzg1Qzk0LjQxOTMgMTA3LjU3IDk2LjgyNDEgMTA4LjM1NiA5OS4yMDA2IDEwOS4yMDdDMTAyLjE3MSAxMTAuMjc4IDEwNS4wNDQgMTExLjUwOCAxMDcuNTI3IDExMy4xNzVDMTE0Ljg3OSAxMTguMDk0IDExMy41MTYgMTI2LjMwNyAxMDQuOCAxMjkuNDAyQzEwMS4zNDMgMTMwLjYzMiA5Ny43ODg2IDEzMS4xODcgOTQuMTM2OCAxMzEuMTg3QzkyLjgyMjIgMTMxLjE4NyA5MS41MDc1IDEzMS4xMDggOTAuMTkyOSAxMzAuOTg5QzgyLjM1MzcgMTMwLjE5NSA3NC45MDQgMTI4LjUyOSA2Ny44OTI2IDEyNS41NTNDNjYuMzgzMiAxMjQuOTE5IDY1LjI2MzMgMTI0LjU2MSA2NC4zODY5IDEyNC41NjFDNjIuODc3NSAxMjQuNTYxIDYyLjA0OTcgMTI1LjU5MyA2MS4xNzMzIDEyNy44OTRDNTkuOTU2IDEzMS4wMjkgNTguODg0OCAxMzQuMjAzIDU3LjgxMzYgMTM3LjM3N0M1Ni40MDE2IDE0MS42NjIgNTYuOTM3MiAxNDIuNjUzIDYxLjkwMzcgMTQ0LjYzN0M2OC4yMzM0IDE0Ny4xMzcgNzUuMDUwMSAxNDguNDA2IDgxLjk2NDIgMTQ5LjMxOUM4Ny4zNjg4IDE1MC4wMzMgODcuNTYzNiAxNTAuMTkyIDg3LjYxMjMgMTU0Ljc5NEM4Ny42MTIzIDE1Ni44NTcgODcuNjEyMyAxNTguOTYgODcuNjYxIDE2MS4wMjNDODcuNjYxIDE2My42NDIgODkuMjE5MSAxNjUuMTg5IDkyLjUzIDE2NS4yMjlDOTQuMjgyOSAxNjUuMjY4IDk2LjAzNTggMTY1LjI2OCA5Ny43ODg2IDE2NS4yNjhDOTkuNzg0OSAxNjUuMjY4IDEwMS43ODEgMTY1LjIyOSAxMDMuNzc4IDE2NS4xODlDMTA2Ljg0NSAxNjUuMTEgMTA4LjQ1MiAxNjMuNzYxIDEwOC40NTIgMTYxLjIyMkMxMDguNDY0IDE2MC41MDQgMTA4LjQ4MiAxNTkuNzg4IDEwOC41MDEgMTU5LjA3NEMxMDguNTU2IDE1Ni45NDcgMTA4LjYxIDE1NC44MyAxMDguNTAxIDE1Mi42OTFDMTA4LjMwNiAxNDkuNzk1IDEwOS44NjQgMTQ4LjMyNyAxMTMuMjcyIDE0Ny41NzNaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4K';
        add_menu_page(
            'Stripe Express',
            'Stripe Express',
            'manage_options',
            'stripe-express',
            array($this, 'admin_page'),
            $svg_img,
            58
        );
    }

    function admin_page() {
        wp_enqueue_style( 'wp-stripe-express-admin' );
        wp_enqueue_script( 'wp-stripe-express-admin' );
        wp_localize_script( 'wp-stripe-express-admin', 'wp_stripe_setting', array(
            'home_url' => home_url(),
            'api_url'  => rest_url( IT_STRIPE_EXPRESS_REST_API . 'admin' ),
            'nonce'    => wp_create_nonce( 'wp_rest' ),
            'role'     => $this->get_role(),
            'language' => get_locale(),
        ) );
        echo '<div id="wp_stripe_express_admin"></div>';
    }

    private function get_role() {
        return 1;
    }

}
