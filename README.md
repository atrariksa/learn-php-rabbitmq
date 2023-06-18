# learn-php-rabbitmq

# setup rabbitmq docker
docker run -d --hostname my-rabbit --name rabbitMQ -p 8080:15672 -p 5672:5672 -p 5671:5671 rabbitmq:3.12.0-management-alpine

# run
php RabbitMQProducer.php
php RabbitMQConsumer.php