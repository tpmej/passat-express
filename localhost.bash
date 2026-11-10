#!/usr/bin/env bash
php -S localhost:8000 &
php -S localhost:8001 ./dashboard.php
wait