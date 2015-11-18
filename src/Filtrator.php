<?php
class Filtrator {

  private static $forbiddenChars = 'aeiouаеёиоуыэюя';

  public function processString($string) {

    $regex = '/[^' . self::$forbiddenChars . ']/usi';
    preg_match_all($regex, $string, $chars);

    return join('', array_reverse($chars[0]));
  }


  public static function run() {
    echo "Input: ";
    $source = fgets(STDIN);

    if (!$source) {
      exit("Specify source string.");
    }

    $result = (new self())->processString($source);
    echo "Result: ${result}";

  }
}
