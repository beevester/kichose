
## Main Features

 * Multi language support
 * Clients management
 * Projects
 * Tasks
 * Calendar with events & reminders
 * Google calendar integration
 * Documents & templates
 * Multi currency support
 * Products & categories management
 * Prices and availability management
 * Possibilities for fulfillment
 * Invoice management

## Technologies

### Backend
 - PHP 7.2
 - Symfony 5
 - API Platform
 - Postgres
 - Elasticsearch
 
### CRM / ERP / ecommerce
 - VueJS, Vuex, Vuetify, Nuxt
 - Docker
 - GIT


# Installation

## Using docker-compose for local testing

.env
```dotenv
PORT_API=8888
PORT_CLIENT=8080
PORT_ECOMMERCE=8081

DATABASE_NAME=api
DATABASE_USER=api
DATABASE_PASSWORD=!ChangeMe!

JWT_PASSPHRASE=!ChangeMe!
COMPOSE_PROJECT_NAME=kichose-crm
```

docker-compose.yml

```
version: '3.2'

services:
  ecommerce:
    restart: always
    image: inshopgroup/inshop-crm-ecommerce
    user: node
    working_dir: /var/www
    environment:
      NODE_ENV: production
      HOST: 0.0.0.0
    ports:
      - ${PORT_ECOMMERCE}:3000
    command: "npm start"

  client:
    restart: always
    image: inshopgroup/inshop-crm-client
    ports:
      - ${PORT_CLIENT}:80

  php:
    restart: always
    image: inshopgroup/inshop-crm-api-php-fpm
    depends_on:
      - db
    volumes:
      - files-data:/var/www/data
      - images-data:/var/www/public/images
    networks:
      - api

  nginx:
    restart: always
    image: inshopgroup/inshop-crm-api-nginx
    depends_on:
      - php
    ports:
      - ${PORT_API}:80
    volumes:
      - images-data:/var/www/images
    networks:
      - api

  db:
    restart: always
    image: postgres:9.5-alpine
    environment:
      - POSTGRES_DB=${DATABASE_NAME}
      - POSTGRES_USER=${DATABASE_USER}
      - POSTGRES_PASSWORD=${DATABASE_PASSWORD}
    volumes:
      - db-data:/var/lib/postgresql/data:rw
    networks:
      - api

  elasticsearch:
    image: docker.elastic.co/elasticsearch/elasticsearch:6.3.1
    environment:
      - bootstrap.memory_lock=true
      - "ES_JAVA_OPTS=-Xms512m -Xmx512m"
    ulimits:
      memlock:
        soft: -1
        hard: -1
    volumes:
      - es-data:/usr/share/elasticsearch/data
    networks:
      - api
      - esnet

  redis:
    image: redis:latest
    volumes:
      - redis-data:/var/lib/redis
    networks:
      - api
      
volumes:
  es-data: {}
  db-data: {}
  files-data: {}
  images-data: {}
  redis-data: {}

networks:
    api:
    esnet:

```

## Setup database & fixtures

```bash
docker-compose exec --user=www-data php sh ./setup.sh
```

Enter pass phrase for config/jwt/private.pem: **!ChangeMe!**  

**NOTE!** described setup is only for local use!

Enjoy, after run, API will be available under [http://localhost:8888/docs](http://localhost:8888/docs)

Client - [http://localhost:8080](http://localhost:8080)
Ecommerce [http://localhost:8081](http://localhost:8081)

```
username: demo
password: demo
```

# Elastic search settings on host machine

```bash
sudo sysctl -w vm.max_map_count=262144
echo "vm.max_map_count=262144" | sudo tee -a /etc/sysctl.conf
```
