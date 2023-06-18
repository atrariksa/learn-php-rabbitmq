<?php
    require_once __DIR__ . '/vendor/autoload.php';
    use PhpAmqpLib\Connection\AMQPStreamConnection;
    use PhpAmqpLib\Message\AMQPMessage;

    $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
    $channel = $connection->channel();

    $channel->queue_declare('hello', false, false, false, false);

    $testMessage = "Jam sabaraha ieu?";
    $msg = new AMQPMessage($testMessage);
    $channel->basic_publish($msg, '', 'hello');

    echo " [x] Sent '$testMessage'\n";

    $channel->close();
    $connection->close();
?>