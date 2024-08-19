FROM mysql:8.1
COPY mysqldata:/var/lib/mysql
COPY ./docker/mysql/my.cnf:/etc/mysql/conf.d/my.cnf
RUN apt-get update && \
    apt-get install -y locales
RUN locale-gen ja_JP.UTF-8
RUN localedef -f UTF-8 -i ja_JP ja_JP.UTF-8
ENV LANG=ja_JP.UTF-8
ENV TZ=Asia/Tokyo