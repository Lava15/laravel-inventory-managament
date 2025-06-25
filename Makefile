test:
	docker exec -it mc-php php artisan test
clean:
	docker exec -it mc-php php artisan optimize:clear
migrate:
	docker exec -it mc-php php artisan migrate
migrate-fresh:
	docker exec -it mc-php php artisan migrate:fresh --seed
controller:
	docker exec -it mc-php php artisan make:controller $1
