<?php
require 'vendor/autoload.php';
require 'db.php';

$app = new \Slim\Slim(array(
    'debug' => true
));
$app->get('/api/report', function () {
	echo var_dump(getall());
} );
$app->get('/api/report/:id', function ($id) {
	echo var_dump(getone($id));
} );
$app->post('/api/report', function () {
	$pd = file_get_contents('php://input');
	$pd = json_decode($pd, 1);
	echo var_dump(addone($pd));

} );
$app->put('/api/report/:id', function ($id) {
	$pd = file_get_contents('php://input');
	$pd = json_decode($pd, 1);
	// echo $pd['body'];
	// return;
	echo var_dump(updateone($id, $pd));
} );

$app->run();