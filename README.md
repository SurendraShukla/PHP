Phan depends on PHP 7.x with the php-ast extension (0.1.5 or newer, uses AST version 50).

#### Check `ast` module is installed or not
`php --modules | grep 'ast';`

#### To install ast module on mac with Homebrew
https://github.com/phan/phan/wiki/Getting-Started-With-Homebrew
  

### Install with composer
    `composer require --dev phan/phan`
    
### Create .phan/config.php
```php
return [
    'target_php_version' => '7.2',
    'directory_list' => [ 'src/' ],
    "exclude_analysis_directory_list" => [ 'vendor/' ],
];
```

### Running phan 
`./vendor/bin/phan`

#### Features/checks
https://github.com/phan/phan#features
http://talks.php.net/etsy18#/phan1

