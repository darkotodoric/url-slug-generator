<?php

use PHPUnit\Framework\TestCase;

final class SlugGeneratorTest extends TestCase
{
    public function testCases()
    {
        $slugGenerator = new SlugGenerator();

        $string = 'Golden Globes 2024: Oppenheimer and Succession sweep up';
        $slug = $slugGenerator->make($string);
        $this->assertSame($slug, 'golden-globes-2024-oppenheimer-and-succession-sweep-up');

        $string = 'I’ve looked through LG’s new transparent OLED TV, and seen something special!';
        $slug = $slugGenerator->make($string);
        $this->assertSame($slug, 'i-ve-looked-through-lg-s-new-transparent-oled-tv-and-seen-something-special');

        try {
            $string = '=====================';
            $slugGenerator->make($string);

            $this->fail();
        } catch (\Exception $exception) {
            $this->assertSame($exception->getMessage(), 'Slug cannot be created!');
        }
    }
}