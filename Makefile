.PHONY: test clean

test:
	./vendor/bin/phpunit --coverage-html=build --coverage-text --coverage-clover=build/coverage.clover

clean:
	rm -rf build/
