.PHONY: test clean

test:
	./vendor/bin/phpunit --coverage-html=build --coverage-text

clean:
	rm -rf build/
