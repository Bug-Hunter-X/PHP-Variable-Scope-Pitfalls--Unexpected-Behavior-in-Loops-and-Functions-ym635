In PHP, a common yet subtle error arises when dealing with variable scope within functions and loops.  Consider this example:

```php
function processData(array $data): array {
  $results = [];
  foreach ($data as $item) {
    $value = calculateValue($item);
    $results[] = $value;
  }
  return $results;
}

function calculateValue($item) {
  $modifier = 2; // This is where the problem might occur
  return $item * $modifier;
}
```

If `$modifier` was intended to vary on each iteration, this code will fail.  The `$modifier` is declared outside the loop in `calculateValue`, making it a function-scoped variable.  Its value remains constant across all iterations, meaning it's not dynamically changed on each loop.

Another similar issue can occur with references.  If an array is passed by reference into a function, and the function modifies the array's structure, those changes will persist even after the function exits, potentially leading to unexpected state changes.