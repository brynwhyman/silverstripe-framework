<?php

namespace SilverStripe\Forms\Tests\ListboxFieldTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

class Article extends DataObject implements TestOnly
{
    private static $table_name = 'ListboxFieldTest_Article';

    private static $db = [
        "Content" => "Text",
    ];

    private static $many_many = [
        "Tags" => Tag::class,
    ];
}
