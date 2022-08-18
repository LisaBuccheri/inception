FROM    alpine:3.14
RUN     apk update
RUN     apk add --no-cache --quiet --update nginx
RUN     apk add --no-cache --quiet --update openssl

RUN     mkdir -p /etc/nginx/ssl /var/run/nginx

RUN     openssl req -x509 -nodes -out /etc/nginx/ssl/lbuccher.42.fr.crt -keyout /etc/nginx/ssl/lbuccher.42.fr.key -subj "/C=FR/ST=IDF/L=Bruxelles/O=42/OU=42/CN=lbuccher.42.fr/UID=lbuccher"

COPY    ./config/nginx.config /etc/nginx/http.d/default.conf 

EXPOSE  443

CMD     [ "nginx", "-g", "daemon off;" ]