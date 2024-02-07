# Use the official PHP image from the Docker Hub
FROM php:7.1-cli

# Set the working directory inside the container
WORKDIR /usr/src/myapp

# Copy the PHP scripts into the working directory
COPY . /usr/src/myapp

COPY entrypoint.sh /usr/local/bin/

RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["entrypoint.sh"]