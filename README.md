# dockerized-dynamic-dns-netcup-api

## About

This project is just a fork from [this project](https://github.com/stecklars/dynamic-dns-netcup-api). Look that one up for more details.
This fork only adds three more features:

1) The application is packaged and executed as docker container.
2) Configurations are injected over environment variables.
3) A cron job will execute the script each 5 minutes.
4) A record updates can be disabled

## Test instructions

A docker-compose file is also provided, to test the application. Be sure to add you credentials in the compose file first.
```bash
docker-compose up --build
```

You dont need to build the image yourself, you can directly pull it from [Dockerhub](https://hub.docker.com/repository/docker/hikkoiri/dockerized-dynamic-dns-netcup-api).