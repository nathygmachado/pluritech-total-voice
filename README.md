
# pluritech-total-voice-php

# SMS sender for PHP using Total Voice API

In progress.

## Installation

The Library can be installed with [Composer](https://getcomposer.org/). Run this command:

```sh
composer require pluritech-total-voice/total-voice-php
```

## Usage

> **Note:** This version of the Total Voice API for PHP requires PHP 5.3.3 or greater.

Simple use example.

```php
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed



use \Exception;
use TotalVoicePhp\TotalVoicePhp as TotalVoicePhp;

private $totalVoiceSMS = null;

$account       = array('token' => 'your_token', 'url' => 'api_endpoint');
$totalVoicePhp = new TotalVoicePhp('TotalVoiceSMS',$account);//TotalVoiceSMS - determine that a class responsible for send SMS will be instantiated
$this->totalVoiceSMS = $totalVoicePhp->getMyClass();

$data = array(
    'number_destiny'  => $number, 
    'message'         => $message,
    'user_can_answer' => false,
    'multi_sms'       => false
);

$this->totalVoiceSMS->setSMSEntity($data);
$response = $this->totalVoiceSMS->send(); 


```

## Documentation

In progress.


## Tests

In progress.


## Contributing

Feel free to make your pull request, chip in to suggestion or report issues.


## License

MIT © [Guilherme Valentim e Natália Gonçalves Machado](mailto:nataliagoncalvesmachado@gmail.com)




