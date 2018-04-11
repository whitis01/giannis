FROM iwhite5/nginx-simple:latest
MAINTAINER Isaac White

WORKDIR /var/www/php  

# Copy the current directory contents into the container at /app
COPY . /var/www/php

# Define environment variable
# ENV NAME World


