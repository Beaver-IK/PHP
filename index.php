<?php

class Foo
{
    public $bar = 'Я bar.';
    public $arr = array('Я A.', 'Я B.', 'Я C.');
    public $r   = 'Я r.';
}
$foo = new Foo();
$bar = 'bar';
$baz = ['foo', 'bar', 'baz', 'quux'];
echo $foo->$bar . "\n";
echo $foo->{$baz[1]} . "\n";

$start = 'b';
$end   = 'ar';
echo $foo->{$start . $end} . "\n";

$arr = 'arr';
echo $foo->{$arr[1]} . "\n";
echo $foo->{$arr}[1] . "\n";

$thiIsPhpLesson = true;

echo $thiIsPhpLesson . PHP_EOL;
echo PHP_EOL;
$thiIsPhpLesson = boolval(1);

var_dump($thiIsPhpLesson);


?>