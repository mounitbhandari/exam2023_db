@echo off
<<<<<<< HEAD
=======
if [%1]==[] goto usage

>>>>>>> 0790cdfe15eee9e714196e83490ceee6af15d996
git add .
git commit -m %1
git pull
git push
goto :eof
:usage
@echo Please add a comment

