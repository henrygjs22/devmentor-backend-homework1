<?php

namespace Tests;

use App\Holiday;
use PHPUnit\Framework\TestCase;

class HolidayTest extends TestCase
{
    public function test_today_is_xmas() //會自動抓test開頭
    {
        $holiday = new Holiday();

        $actual = $holiday->say();
        $expected = "Today is not X'mas";

        $this->assertEquals($expected, $actual);
    }
}