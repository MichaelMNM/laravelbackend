FROM michaelmnm/laravelbackend-base:latest
MAINTAINER Michael Mandato <mmandato@helloencom.co>

COPY scripts/release.sh /usr/local/bin/release.sh
RUN chmod +x /usr/local/bin/release.sh

COPY target /var/deploy
WORKDIR /

ENTRYPOINT ["release.sh"]
