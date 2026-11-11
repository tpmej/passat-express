# PassatExpress
Projekt na zaliczenie praktyk w ZSET w Lesznie. Strona internetowa sklepu z passatami, oraz dashboard dla dilerów samochodowych wraz z logowaniem i admin panelem.

# Jak odpalić?
## Pobieranie
We wybranym folderze należy uruchomić poniższą komendę. 
```markdown
git clone https://github.com/tpmej/passat-express
```
## Uruchamianie
W katalogu do którego wcześniej pobraliśmy repozytorium, zależnie od systemu operacyjnego należy uruchomić następujące komendy.
### Linux
```bash
cd passat-express
bash localhost.bash
```
### Windows
```bat
cd passat-express
localhost.bat
```
Po wykonaniu tych kroków. Pod adresem [http://localhost:8000](http://localhost:8000) w przeglądarce jest dostępna strona główna, a pod adresem [http://localhost:8001](http://localhost:8001) strona logowania do dashboardu dilera, oraz jeżeli użytkownik ma uprawnienia administratora, to także admin panel. Nie należy zamykać okna konsoli ze skryptem localhost.bash / .bat, ponieważ serwer php przestanie działać.

# Użytkowanie
## Strona internetowa
W wybranej przeglądarce należy wpisać adres [http://localhost:8000](http://localhost:8000), lub kliknąć w ten link.
## Dashboard
W wybranej przeglądarce należy wpisać adres [http://localhost:8001](http://localhost:8001), lub kliknąć w ten link.  
### Administrator
Login: admin  
Hasło: passat
### Użytkownik
Login: user  
Hasło: volks

# Autorzy
| Autor | Rola w projekcie | GitHub |
| :--- | :--- | :--- |
| **Tomasz Całujek** | Backend (PHP, SQLite) | [tpmej](https://github.com/tpmej) |
| **Mikołaj Klefas** | Frontend (HTML, CSS, JS) | [mk5137](https://github.com/mk5137) |

# Licencja
Ten projekt jest objęty licencją **GNU General Public License v3.0** (GPLv3).  
Pełną treść licencji znajdziesz w pliku [LICENSE](LICENSE).
