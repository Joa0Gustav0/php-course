<?php

declare(strict_types=1);

function printGreetings(string ...$entryGreetings): int | string {
  foreach($entryGreetings as $greeting) {
    echo "$greeting<br/>";
  }

  return 1;
}

echo printGreetings("Hello", "Welcome", "Congratulations");