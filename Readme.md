# Trackmania API documentation
[Visit the documentation here](https://api.openplanet.dev/).

## Running the documentation locally
Docker is the recommended way of developing.

1. Build the docker image:
   `docker build -t op-nadeoapi-docs .`
2. Start a container:
   `docker run --rm -v $(pwd):/var/www/html -p 80:80 op-nadeoapi-docs`
3. Visit http://127.0.0.1/