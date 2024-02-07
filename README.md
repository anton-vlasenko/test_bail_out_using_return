## Getting Started
To get the application up and running, follow these steps:

### Step 1: Clone the Repository
Clone this repository to your local machine using Git:

```bash
git clone <repository-url>
cd <repository-directory>
```

Replace `<repository-url>` with the URL of this Git repository, and `<repository-directory>` with the name of the directory into which the repository was cloned.

### Step 2: Build the Docker Image
From the root directory of the cloned repository, build the Docker image using the following command:

```bash
docker build -t php-app . 
```

This command builds a Docker image named `php-app` based on the instructions in the `Dockerfile`.

### Step 3: Run the Container
Once the image is built, you can run the container using:

```bash
docker run -it --rm php-app
```

## Running with Different PHP Versions

The Docker setup provided in this repository is based on PHP 7.0 CLI. However, you might want to run the application using a different version of PHP for testing.

### Available PHP Images

The official PHP images on Docker Hub support various versions and configurations. You can find a list of available PHP images and tags here: [Official PHP Docker Images](https://hub.docker.com/_/php).

### Modifying the Dockerfile

1. Open the `Dockerfile` in your favorite text editor.
2. Change the `FROM` line to specify a different PHP version. For example, to use PHP 8.0 CLI, change the line to:

```Dockerfile
FROM php:8.0-cli
```
3. Rebuild the application and run the container.

```bash
docker build -t php-app .
docker run -it --rm php-app
```