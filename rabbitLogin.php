<?php
require_once('/home/shameel/it490-rabbit/rabbitmqphp_example/path.inc');
require_once('/home/shameel/it490-rabbit/rabbitmqphp_example/get_host_info.inc');
require_once('/home/shameel/it490-rabbit/rabbitmqphp_example/rabbitMQLib.inc');

$client = new rabbitMQClient("/home/shameel/it490-rabbit/rabbitmqphp_example/testRabbitMQ.ini","testServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "test message";
}

$request = array();
$request['type'] = "login";
$request['email'] = $_POST['email'];
$request['password'] = $_POST['pass'];
$request['message'] = $msg;
$response = $client->send_request($request);
//$response = $client->publish($request);

echo "client received response: ".PHP_EOL;
print_r($response);
echo "\n\n";

echo $argv[0]." END".PHP_EOL;
?>
