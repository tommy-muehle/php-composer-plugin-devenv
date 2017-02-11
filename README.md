# php-composer-plugin-devenv

Development environment to build Composer plugins.  
For a full description look at [my related blog post](https://tommy-muehle.github.io/2017/02/07/composer-plugin-development-environment/).

## Requirements

* Docker
* Docker-Compose

## Install

```
git clone https://github.com/tommy-muehle/php-composer-plugin-devenv.git composer-plugin-devenv
cd composer-plugin-devenv
docker-compose build
```

## Usage

Develop your new plugin in the [plugin directory](plugin).
To install the plugin run the following command:

```
docker-compose run --rm composer global require my/new-plugin
```

If the plugin is installed you can further develop it. The source are always symlinked to the Composer container.  
For example to see your new additional Composer CLI command:

```
docker-compose run --rm composer new-plugin:sample
```

You can also customize some global Composer settings in 
the [composer directory] if is necessary. And you can also extend the [plugin Dockerfile](plugin/Dockerfile) to 
add PHPUnit or something else.
