## BugHerdServiceProvider

Provider to use [BugHerd Api](https://github.com/beleneglorion/php-bugherd-api) with [Silex](https://github.com/fabpot/Silex)


#### Install

You have to add to your composer.json file:

```
"beleneglorion/silex-bugherd-api-provider": "dev-master"
```


#### Registering

```
$app->register(new Hinatachii\Silex\Provider\BugherdServiceProvider());
```

#### Configuration

You need to set the configuration for the  api :

```
$app['bugherd.options'] = array(
    'apikey'   => "123456789abcdef"
);
```