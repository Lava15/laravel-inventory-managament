test:
	docker exec -it jron-php php artisan test
clean:
	docker exec -it jron-php php artisan optimize:clear
migrate:
	docker exec -it jron-php php artisan migrate
migrate-fresh:
	docker exec -it jron-php php artisan migrate:fresh
jj:
	docker exec -it jron-php
