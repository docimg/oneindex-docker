# Docker-oneindex

[![CircleCI](https://circleci.com/gh/TimeBye/oneindex.svg?style=svg)](https://circleci.com/gh/TimeBye/oneindex)
[![Docker Pulls](https://img.shields.io/docker/pulls/setzero/oneindex.svg)](https://hub.docker.com/r/setzero/oneindex)
[![](https://images.microbadger.com/badges/image/setzero/oneindex.svg)](https://microbadger.com/images/setzero/oneindex "Get your own image badge on microbadger.com")
[![](https://images.microbadger.com/badges/version/setzero/oneindex.svg)](https://microbadger.com/images/setzero/oneindex "Get your own version badge on microbadger.com")

> 👋 本项目为 [donwa/oneindex](https://github.com/donwa/oneindex/commits/master) docker 镜像。

## 版本：

- `latest`：以alpine为基础系统，跟踪 [donwa/oneindex](https://github.com/donwa/oneindex/commits/master) 的最新提交。
- `alpine-commit_sha`：以alpine为基础系统，[donwa/oneindex](https://github.com/donwa/oneindex/commits/master) Commit sha对应的提交。

## 运行：

- 使用`docker run`命令运行：

    ```
    docker run -d --name oneindex \
        -p 80:80 --restart=always \
        -v ~/oneindex/config:/var/www/html/config \
        -v ~/oneindex/cache:/var/www/html/cache \
        -e REFRESH_TOKEN='0 * * * *' \
        -e REFRESH_CACHE='*/10 * * * *' \
        setzero/oneindex
    ```

    - 停止删除容器：
        ```
        docker stop oneindex
        docker rm -v oneindex
        ```

- 使用`docker-compose`运行：

    ```
    docker-compose up -d
    ```

    - 停止删除容器：
        ```
        docker-compose down
        ```

## 变量：

- `TZ`：时区，默认`Asia/Shanghai`
- `PORT`：服务监听端口，默认为80
- `DISABLE_CRON`：是否禁用crontab自动刷新缓存，设置任意值则不启用
- `REFRESH_TOKEN`：使用crontab进行token更新，默认`0 * * * *`，即每小时更新一次
- `REFRESH_CACHE`：使用crontab进行缓存更新，默认`*/10 * * * *`，即每10分钟更新一次
- `SSH_PASSWORD`：sshd用户密码，用户名为`root`，若不设置则不启用sshd

## 持久化：

- `/var/www/html/cache`：缓存存储目录
- `/var/www/html/config`：配置文件存储目录
