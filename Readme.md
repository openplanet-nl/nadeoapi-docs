# Trackmania API documentation
[![Tests](https://github.com/openplanet-nl/nadeoapi-docs/actions/workflows/tests.yml/badge.svg)](https://github.com/openplanet-nl/nadeoapi-docs/actions/workflows/tests.yml)

[Visit the documentation here](https://webservices.openplanet.dev/).

## Running the documentation locally
Docker is the recommended way of developing the site, and also for testing documentation changes locally.

1. Build the docker image:
   ```
   docker build -t op-nadeoapi-docs .
   ```
2. Start a container:
   ```
   docker run --rm -v ./:/app -p 80:80 op-nadeoapi-docs
   ```
3. Visit http://127.0.0.1/

## Running tests
Content tests run automatically on a push to the repository. To run them locally, you need Python and PyYAML. Then, simply run the test script:

```
$ ./test.py
```
