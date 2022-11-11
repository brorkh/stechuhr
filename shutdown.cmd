@echo off
timeout /T 5
C:
cd "C:\Program Files\Mozilla Firefox\"
start firefox.exe https://<domain.com>/out.php
timeout /T 10
cd "C:\Windows\System32\"
start shutdown.exe /p
