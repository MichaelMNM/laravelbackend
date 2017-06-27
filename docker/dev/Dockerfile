FROM michaelmnm/laravelbackend-base
MAINTAINER Michael Mandato <mmandato@helloencom.co>

RUN apt-get update && \
	apt-get install -y curl && \
	curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV COMPOSER_CACHE_DIR=/cache/composer

# add start up scripts
COPY scripts/test.sh /usr/local/bin/test.sh
COPY scripts/build.sh /usr/local/bin/build.sh

# make start up scripts runnable
RUN chmod +x /usr/local/bin/test.sh
RUN chmod +x /usr/local/bin/build.sh

# Add application src code
COPY src /var/www
WORKDIR /var/www

# set entrypoint pid as phpunit
ENTRYPOINT ["test.sh"]
CMD ["vendor/bin/phpunit", "--log-junit /reports/unit-tests.xml "]

#start container in dev mode
#docker-compose run --rm --service-ports test php artisan serve --host=0.0.0.0 --port=8000
