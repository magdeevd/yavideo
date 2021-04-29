### Локальный запуск
- php >= 7.3
- composer https://getcomposer.org/download/
- chrome https://www.google.com/chrome/
- chromedriver https://chromedriver.chromium.org/downloads

Установить зависимости: `composer install`

Запустить тест: `php vendor/bin/codecept run acceptance --steps --env chromedriver`

### Docker
- docker https://docs.docker.com/get-docker/
- docker-compose https://docs.docker.com/compose/install/
  
Запустить тест: `docker-compose run --rm codecept run acceptance --env docker`

