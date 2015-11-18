<?php

class FiltratorTest extends PHPUnit_Framework_TestCase
{
  public function testLatinWorks()
  {
    $filtrator = new Filtrator();

    $source = 'Hello world!';
    $result = '!dlrw llH';

    $this->assertEquals($result, $filtrator->processString($source));

  }

  public function testCyrilicWorks()
  {
    $filtrator = new Filtrator();

    $source = 'Привет, Мир!';
    $result = '!рМ ,тврП';

    $this->assertEquals($result, $filtrator->processString($source));

  }

}
