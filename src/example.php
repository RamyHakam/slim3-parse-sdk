<?php
//Example route for tesing 

$app->get('/',function($req,$res){
    return $res->withJson('SlimFramework 3 WithParse Server SDK',200);
});