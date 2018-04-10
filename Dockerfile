FROM iwhite5/nginx:latest 
MAINTAINER Isaac White

WORKDIR /var/www/php  

# Copy the current directory contents into the container at /app
COPY . /var/www/php

# Define environment variable
# ENV NAME World

EXPOSE 80 443 8000 8001

