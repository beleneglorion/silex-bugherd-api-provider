## BugHerdServiceProvider

Provider to use [BugHerd Api](https://github.com/spekkionu/bugherd) with [Silex](https://github.com/fabpot/Silex)


#### Install

You have to add to your composer.json file:

```
"beleneglorion/bugherd-bugherd-api-provider": "dev-master"
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

#### Use in controllers
    $projectId = 12345;
    $data = $app['bugherd']->get_projects_tasks$projectId);
    foreach($data['tasks'] as $task) {
        if (is_null($task['status_id'] )) {
         $res =   $app['bugherd']->update_projects_tasks($projectId,$task['id'],array('status'=>'backlog'));
        }
    }
