# image_checker_php

check if png image file is finalized or not

## composer

```json
{
	"repositories": [
      {
          "type": "vcs",
          "url": "https://github.com/aspick/image_checker"
      }
  ],
	"require": {
			"aspick/image_checker": "dev-master"
	}
}
```

## usage

```php
$imagepath = "/path/to/image.png";
if(\Aspick\ImageChecker\PngChecker::check($imagepath)){
	echo 'valid';
}else{
	dcho 'invalid';
}
```
