<?php
$me = 'Davey';
$names = array('Smith', 'Jones', 'Jackson');

echo "There cannot be more thans two {$me}s!";
echo 'Citation: $names[1][1987]';


// herodoc
$who = "World";
echo <<<NO
So I said, "Hello $who"
NO;

//nowdoc

$who = "World";
echo <<<'TEXT'
    So I said, "Hello $who"
TEXT;

echo "<br/>".'This is \'my\' string';
$a = 10;
echo "<br/>The value of \$a is \"$a\".";


echo "Here's an escaped backslash: - \\ -  ";

echo "\x2a";
echo "\052";
echo strlen("\052");
echo '<br/>';
echo strtr('bbc', 'b', '1');

$string = 'abcdef';
echo '<br/>';
echo $string[4]; // Outputs 'b'

$s = 'abcdef';
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] > 'c') {
            echo $s[$i];
        }
    }

echo "abcdef"[4];

 $s1 = 'abcd1234';
          $s2 = 'abcd5678';
          // Compare the first four characters
          echo strncasecmp($s1, $s2, 5);

$haystack = "abcdefg";
  $needle = 'd';
  echo strpos($haystack, $needle);
  if (strpos($haystack, $needle, 6) !== false) {
      echo 'Found';
}

$haystack = '123456';
  $needle = '34';
  echo strstr($haystack, $needle, 2); // outputs 3456

  echo "<br/>";

  $string = '13345abcdef';
          $mask = '12345e';
          echo strspn($string, $mask);

$string = '1abdac234';
          $mask = '1';
          echo strspn($string, $mask, 0, 3); // Outputs 3

echo substr_replace("Hello World", "Reader", 0);
echo substr_replace(
"Canned tomatoes are good", "potatoes", 7
);

$user = "davey@example.com";
echo strpos($user, '@');
          $name = substr_replace($user, "", strpos($user, '@'));
          echo "<br/>Hello " . $name;
echo number_format("100000.698", 5, ",", " ");

 setlocale(LC_MONETARY, "ja_JP");
   echo "<br/>Hello " . $name;
  echo money_format('%.4n', "100000.698");

 $n = 123;
  $f = 12398.45;
  $s = "A string";

    echo "<br/>";
  // Example with precision
  printf("%3.1u", $f); // prints 123.450

?>
