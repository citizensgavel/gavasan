<?php
$createObject = function () use ($argv) {
    $getfirstARG = $argv[1];
    $adminPath = '';

    if($getfirstARG !== '--api'){
        echo 'Only --api is allowed' . PHP_EOL;
        exit;
    }


    $api = explode('/', $argv[2]);
    $controllerPath = ucwords($api[0]);

    $controller = ucwords($api[1]);
    $routePathForController = './src/Action/' . $controllerPath . '/';

    if (!is_dir($routePathForController)) {
        mkdir($routePathForController, 0777, true);
    }

    if(isset($argv[3]) && $argv[3] == '--no-token'){
        $pullFiles =  file_get_contents('./bin/gavasan/n_controller.gavasan');
    }else {
        $pullFiles =  file_get_contents('./bin/gavasan/controller.gavasan');
    }
    
    $pullFiles = str_replace('$controllerPath', $controllerPath,$pullFiles);
    $pullFiles = str_replace('$class', $controller, $pullFiles);
    file_put_contents("{$routePathForController}{$controller}.php", $pullFiles);




    $routePathForService = './src/Domain/' . $controllerPath . '/Service/';
    if (!is_dir($routePathForService)) {
        mkdir($routePathForService, 0777, true);
    }
    $pullFiles =  file_get_contents('./bin/gavasan/service.gavasan');
    $pullFiles = str_replace('$controllerPath', $controllerPath, $pullFiles);
    $pullFiles = str_replace('$class', $controller, $pullFiles);
    file_put_contents("{$routePathForService}{$controller}Service.php", $pullFiles);


    

    $routePathForModel = './src/Domain/' . $controllerPath . '/Repository/';
    if (!is_dir($routePathForModel)) {
        mkdir($routePathForModel, 0777, true);
    }
    $pullFiles =  file_get_contents('./bin/gavasan/model.gavasan');
    $pullFiles = str_replace('$controllerPath', $controllerPath, $pullFiles);
    $pullFiles = str_replace('$class', $controller, $pullFiles);
    file_put_contents("{$routePathForModel}{$controller}Repository.php", $pullFiles);

    echo 'New gavasan Api Successfully Added' . PHP_EOL;
    exit;

};
$createObject();