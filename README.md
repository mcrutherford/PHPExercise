# PHP Coding Exercise

This is a simple PHP project illustrating object inheritance and using PHPUnit for testing 
with PHP CS Fixer and PHPStan for code quality.

This application can be run either via the command line or as an apache web server.
It takes in an animal type and a name as arguments, then responds with 
an appropriate speaking message from the animal. As of now, support is available for cats, 
dogs, cows, and unicorns with an example PR to add a duck.

***Note:*** This project is hosted at https://lexia.markrutherford.xyz using the docker-compose 
deployment.

Example usage:
- [https://lexia.markrutherford.xyz?name=Skittles&type=cat](https://lexia.markrutherford.xyz?name=Skittles&type=cat)
- [https://lexia.markrutherford.xyz/?name=Rainbow&type=unicorn](https://lexia.markrutherford.xyz/?name=Rainbow&type=unicorn)

## Requirements
- PHP 8.1.0 or higher
- Docker (Optional, for running the application in a container with apache)
- Composer (Optional, for running PHPStan and PHP CS Fixer)

## Project Structure
- `src/` : Contains the main application source code
- `tests/` : Contains the PHPUnit tests
- `Dockerfile` : Used for building the Docker image
- `docker-compose.yml` : Used for easier setup and run with Docker
- `tools/` : Contains PHP CS Fixer and PHPStan

## Running the application

### Directly
```bash
php src/index.php [name] [type]
```
Replace `[name]` and `[type]` with the name of the animal and its type respectively

### With Docker:
First, start the Docker service, then run:
```bash
docker-compose up -d
```
in the root project directory

## Running the tests
Install `composer.json` dependencies, then run:
```bash
./vendor/bin/phpunit tests
```

## Code Quality Tools
This project uses PHP CS Fixer for coding standards and PHPStan for static analysis.

- **Running PHP CS Fixer** 

```bash
./tools/php-cs-fixer/vendor/bin/php-cs-fixer fix --config='.php-cs-fixer.php'
```

- **Running PHPStan** 

```bash
./tools/phpstan/vendor/bin/phpstan analyse -c phpstan.neon src/ tests/
```

## Notes
- The apache param output could be improved (perhaps formatting as JSON), but I left
it as-is to keep parity with the CLI output and match the requested exercise output.
- Check out the open PRs to see a good and bad example of a PR. I made 
[one](https://github.com/mcrutherford/PHPExercise/pull/1) intentionally fail a PHPUnit 
test to show the github action catching it and disallowing a merge, while 
[the other PR](https://github.com/mcrutherford/PHPExercise/pull/2) is valid and ready to merge.
- I have also set up an automatic deployment action to ghcr.io, to streamline docker 
deployments. All github actions can be found in `.github/workflows`
- I set up automatic deployments to AWS ECS (Elastic Container Service) automatically 
running the docker container serverless via AWS Fargate. I got tired of working on this 
before finishing setting up an ALB to actually access the container, but it is automatically deploying 
with new code merges. This is why there are files like `aws-task-definition.json` and `.github/workflows/aws.yml`
  - Instead of using AWS ECS, I set the container up to run on a local server using the following tech stack:
    - docker-compose: To run the container
    - Traefik: Reverse proxy from https://lexia.markrutherford.xyz to the container
    - Portainer: Easily manage docker containers/stacks from a gui
    - Watchtower: Automatically pull and redeploy the docker container when there is a newer version
