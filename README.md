# dockerized-dynamic-dns-netcup-api

- [dockerized-dynamic-dns-netcup-api](#dockerized-dynamic-dns-netcup-api)
  - [About](#about)
  - [Test instructions](#test-instructions)
  - [Caveats](#caveats)

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

## Caveats

The project only makes sense, when your public IPv4 address is only assigned to your host and not double-NATed behind several routers.

In the other case, you should use IPv6 to unambiguously identify your host. Thats where the problem is:
IPv6 and Docker do not work well together. First of all you absolutely need to use a linux machine, because other operating systems do not support docker & IPv6. Additionally, you need to know the IPv6 address range, which you need to pass to docker over the `--fixed-cidr-v6=""` flag. In case the IPv6 address prefix gets reset by your ISP, you need to manually change in the docker daemon settings. Thats a big pile of bulls***, thats why we need to come up with another solution. Have a look at [go-dynamic-netcup-ipv6-dns-updater](https://github.com/hikkoiri/go-dynamic-netcup-ipv6-dns-updater).