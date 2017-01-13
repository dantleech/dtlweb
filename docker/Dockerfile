FROM tutum/lamp
RUN apt-get update
RUN apt-get install php5-gd -y
RUN git clone http://github.com/dantleech/dtlweb
WORKDIR dtlweb
RUN php -r "readfile('https://getcomposer.org/installer');" | php
RUN php composer.phar install
