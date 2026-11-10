@echo off
start /b php -S localhost:8000
start /b php -S localhost:8001 ./dashboard.php
pause