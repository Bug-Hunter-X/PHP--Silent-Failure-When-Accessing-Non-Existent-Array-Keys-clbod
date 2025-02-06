The safest approach is to always check whether a key exists before attempting to access it using `isset()` or `array_key_exists()`.  Alternatively, use the `??` null coalescing operator to provide a default value if the key isn't found. 

```php
<?php
$myArray = [];
$myArray["key1"] = 10;
$myArray[1] = 20;

// Using isset()
if (isset($myArray[0])) {
  echo $myArray[0];
} else {
  echo "Key 0 does not exist";
}

// Using array_key_exists()
if (array_key_exists(0, $myArray)) {
  echo $myArray[0];
} else {
  echo "Key 0 does not exist";
}

// Using null coalescing operator
echo $myArray[0] ?? "Key 0 does not exist";
?>
```

By explicitly checking for the key's existence, you prevent unexpected NULL values from silently propagating through your code, leading to more robust and reliable applications.