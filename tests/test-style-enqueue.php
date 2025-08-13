<?php
class StyleEnqueueTest extends WP_UnitTestCase {
    public function test_styles_are_enqueued() {
        streamit_enqueue_styles();

        $this->assertTrue( wp_style_is( 'parent-style', 'enqueued' ) );
        $this->assertTrue( wp_style_is( 'child-style', 'enqueued' ) );
    }
}
