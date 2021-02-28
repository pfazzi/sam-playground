build-HelloWorldPhpFunction:
	cp ./lambda_handler.php $(ARTIFACTS_DIR)
	cp ./composer.json $(ARTIFACTS_DIR)
	cp ./composer.lock $(ARTIFACTS_DIR)
	composer install --no-dev --optimize-autoloader --working-dir=$(ARTIFACTS_DIR)
